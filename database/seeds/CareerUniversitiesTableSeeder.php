<?php

use Illuminate\Database\Seeder;

class CareerUniversitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // factory(App\CareerUniversity::class, 150)->create();

        $relationships = [
			[1, 1],
			[2, 11],
			[3, 2],
			[3, 3],
			[3, 4],
			[3, 5],
			[3, 6],
			[3, 7],
			[3, 8],
			[4, 9],
			[4, 1],
			[4, 10],
			[4, 8],
			[4, 12],
			[4, 13]
        ];


        foreach ($relationships as $rel) {
        	factory(App\CareerUniversity::class)->create([
    			"career_id" => $rel[0],
    			"university_id" => $rel[1]
    		]);       	
        }

    }
}
