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
        Schema::create('additional_personal_information', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('form_id');
            $table->string('home_living_time');
            $table->string('rent_or_own');
            $table->string('us_citizen');
            $table->string('military');
            $table->string('dependent_on_military');
            $table->string('drivers_license_number');
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
        Schema::dropIfExists('additional_personal_information');
    }
};
