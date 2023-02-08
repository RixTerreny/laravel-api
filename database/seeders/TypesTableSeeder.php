<?php

namespace Database\Seeders;

use App\Models\Type;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $linguaggi =[
            'javascript','bootstrap','php'
        ];

        foreach($linguaggi as $linguaggio){

            $myType = new Type();
    
            $myType->type = $linguaggio;
            $myType->save();
        }
    }
}
