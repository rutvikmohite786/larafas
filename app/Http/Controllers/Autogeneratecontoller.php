<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Autogeneratecontoller extends Controller
{
    public function update(Request $request){
         
       $data['fieldName']=$request->inputs;
       $data['dropdownlistforid']=$request->dropdownlistforid;
       $data['inputId'] = $request->inputid;
       $data['modelName']=$request->model_name;
       $data['functionName']=$request->function_name;
       $data['variableName1']=$request->variable_name1;
       $data['variableName2'] = $request->variable_name2;
       return view('controller.update',['data'=>$data]);
    }
    public function create(Request $request){
       $data['fieldName'] = $request->inputs;
       $data['tableName'] = $request->table_name;
       $data['dropdownlistforid'] = $request->dropdownlistforid;
       $data['inputId'] = $request->inputid;
       $data['request_var_name'] = $request->request_var_name;
       $data['modelName'] = $request->model_name;
       $data['functionName'] = $request->function_name;
       $data['variableName1'] = $request->variable_name1;
       $data['variableName2'] = $request->variable_name2;
       $data['variableName3'] = $request->variable_name3;
       return view('controller.create', ['data' => $data]);
    }
    public function display(Request $request){
      $data['modelName']=$request->model_name;
      $data['functionName']=$request->function_name;
      $data['tableName']=$request->table_name;
      
    }
}
