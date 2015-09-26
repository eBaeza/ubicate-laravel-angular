<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

// factory for Careers
$factory->define(App\Career::class, function (Faker\Generator $faker) {
    return [
        'name' => ucwords($faker->bs),
        'area' => $faker->randomElement([
        	'Aeronáutica',
        	'Educación',
        	'Computación',
        	'Medicina'
        ])
    ];
});

// factory for Universities
$factory->define(App\University::class, function (Faker\Generator $faker) {
    return [
        'name' => "University of $faker->streetName",
        'country' => $faker->randomElement([
        	'México',
        	'EUA',
        	'España',
        	'Canadá',
        	'Inglaterra'
        ])
    ];
});

// factory for Career-Universities relationship
$factory->define(App\CareerUniversity::class, function (Faker\Generator $faker) {
	// get id of all the Careers and Universities
	$idsCareers = App\Career::lists('id')->toArray();
	$idsUniversities = App\University::lists('id')->toArray();

    return [
        'career_id' => $faker->randomElement($idsCareers),
        'university_id' => $faker->randomElement($idsUniversities)
    ];
});
