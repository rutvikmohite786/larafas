<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Userfield;


class Usersfields extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         for($i=0;$i<11;$i++){
        Userfield::create([
            'fields' => $i+1
        ]);
       }
    }
}
