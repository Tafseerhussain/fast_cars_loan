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
        Schema::create('employment_information', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('form_id');
            $table->string('work_place');
            $table->string('address');
            $table->string('state');
            $table->string('city');
            $table->string('zip');
            $table->string('get_paid');
            $table->date('last_payday');
            $table->date('next_payday');
            $table->string('direct_deposit');
            $table->string('type_of_income');
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
        Schema::dropIfExists('employment_information');
    }
};
