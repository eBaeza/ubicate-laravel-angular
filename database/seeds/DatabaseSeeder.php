<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        // seeder for careers
        $this->call(CareersTableSeeder::class);

        // seeder for careers
        $this->call(UniversitiesTableSeeder::class);

        //seeder for careers-universities
        $this->call(CareerUniversitiesTableSeeder::class);

        Model::reguard();
    }
}
