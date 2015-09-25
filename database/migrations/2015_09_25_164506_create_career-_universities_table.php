<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCareerUniversitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('career-universities', function (Blueprint $table) {
            $table->integer('id_career')->unsigned();;
            $table->integer('id_university')->unsigned();;

            $table->timestamps();
            
            $table->foreign('id_career')
                    ->references('id_career')
                    ->on('careers');

            $table->foreign('id_university')
                    ->references('id_university')
                    ->on('universities');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('career-universities');
    }
}
