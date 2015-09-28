<?php

use Illuminate\Database\Seeder;

class CareersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // factory(App\Career::class, 15)->create();

        $careers = [
			[
				"name" => "Administración aeronáutica militar",
				"area" => "Aeronáutica"
			],
			[
				"name" => "Ciencias aeronáuticas",
				"area" => "Aeronáutica"
			],
			[
				"name" => "Educación básica",
				"area" => "Educación"
			],
			[
				"name" => "Idiomas",
				"area" => "Educación"
			]
        ];

        foreach ($careers as $career) {
        	factory(App\Career::class)->create([
    			"name" => $career["name"],
    			"area" => $career["area"]
    		]);       	
        }
    }
}
