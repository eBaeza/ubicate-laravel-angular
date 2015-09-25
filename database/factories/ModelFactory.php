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
        'name_career' => ucwords($faker->bs),
        'area_career' => $faker->randomElement([
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
        'name_university' => "University of $faker->streetName",
        'country_university' => $faker->randomElement([
        	'México',
        	'EUA',
        	'España',
        	'Canadá',
        	'Inglaterra'
        ])
    ];
});
