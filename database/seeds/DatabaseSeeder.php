<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0; $i < 10; $i++) { 
	    	DB::table('tasks')->insert([
	            'title' => str_random(8),
	            'body' => str_random(22),
	        ]);
    	}
    }
}
