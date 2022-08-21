<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vehicle_information', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('form_id');
            $table->string('year');
            $table->string('make');
            $table->string('model');
            $table->string('trim');
            $table->string('license_plate');
            $table->string('mileage');
            $table->string('vin');
            $table->text('vehicle_images');
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
        Schema::dropIfExists('vehicle_information');
    }
};
