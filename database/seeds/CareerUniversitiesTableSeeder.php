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
        factory(App\CareerUniversity::class, 150)->create();
    }
}
