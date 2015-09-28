<?php

use Illuminate\Database\Seeder;

class UniversitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // factory(App\University::class, 25)->create();  

    	$universitesEcuador = [
			"ESPE",
			"UCUENCA",
			"UNEMI",
			"UPSE",
			"UTMACHALA",
			"UTA",
			"UNIDEC",
			"UNACH",
			"UPACIFICO",
			"UCE"
    	];

    	$universitiesPeru = [
			"USMP",
			"UCV",
			"UNSM"
    	];

    	foreach ($universitesEcuador as $university) {
    		factory(App\University::class)->create([
    			"name" => $university,
    			"country" => "Ecuador"
    		]);
    	}

    	foreach ($universitiesPeru as $university) {
    		factory(App\University::class)->create([
    			"name" => $university,
    			"country" => "Perú"
    		]);
    	}
    }
}
