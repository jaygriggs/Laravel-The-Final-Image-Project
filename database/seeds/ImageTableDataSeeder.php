<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon; 

class ImageTableDataSeeder extends Seeder
{



    public function run()

    {

    	for ($i=0; $i < 5; $i++) { 

	    	DB::table('pictures')->insert([

	            'name' => str_random(5),
	            'pic' => file_get_contents('http://lorempixel.com/640/400/'),
	            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
	            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')

	        ]);

    	}

    }

}
