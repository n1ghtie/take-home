<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class EditVehicleDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('vehicle_details', function (Blueprint $table) {
            $table->dropColumn('fuel_type');
            $table->dropColumn('type');
            $table->dropColumn('color');
            $table->dropColumn('licence_plate');

            $table->string('license_plate')->after('userdetails_id');
            $table->string('colour')->after('model');
            $table->enum('fuel', ['electric', 'hybrid', 'diesel', 'petrol'])->after('transmission');
        });

        Schema::table('user_details', function (Blueprint $table) {
            $table->string('usage')->after('company');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('vehicle_details', function (Blueprint $table) {
            $table->dropColumn('fuel');
            $table->dropColumn('colour');
            $table->dropColumn('license_plate');
        });

        Schema::table('user_details', function (Blueprint $table) {
            $table->dropColumn('usage');
        });
    }
}
