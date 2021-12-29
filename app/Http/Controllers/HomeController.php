<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Userfield;
use App\Models\EmailSending;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
    public function CreateControllerIndex(){
        
        $fileds= Userfield::select('fields')->get();
        $email= EmailSending::select('value')->get();
        return view('controller.createview',['usersfields'=>$fileds,'email'=>$email]);
    }
    public function UpdateControllerIndex(){
        $fileds = Userfield::select('fields')->get();
        return view('controller.updateview', ['usersfields' => $fileds]);
    }
    public function DeleteControllerIndex()
    {
        $fileds = Userfield::select('fields')->get();
        return view('controller.deleteview', ['usersfields' => $fileds]);
    }
    public function DataDisplayControllerIndex(){
        $fileds = Userfield::select('fields')->get();
        return view('controller.displaydataview', ['usersfields' => $fileds]);
    }
}
