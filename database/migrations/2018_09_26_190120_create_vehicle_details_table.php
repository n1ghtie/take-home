<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVehicleDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vehicle_details', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('userdetails_id')->comment('foreign key for user_details table');
            $table->string('licence_plate');
            $table->string('make');
            $table->string('model');
            $table->string('color');
            $table->integer('engine_cc');
            $table->integer('no_wheels');
            $table->integer('no_doors');
            $table->integer('no_seats');
            $table->integer('weight_category');
            $table->boolean('has_gps');
            $table->boolean('has_sunroof');
            $table->boolean('is_hgv');
            $table->boolean('has_boot');
            $table->boolean('has_trailer');
            $table->enum('fuel_type', ['electric', 'diesel', 'petrol', 'duel']);
            $table->enum('transmission', ['manual', 'semi-automatic', 'automatic']);
            $table->enum('type', ['electric', 'hybrid', 'diesel', 'petrol']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vehicle_details');
    }
}
