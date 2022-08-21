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
        Schema::create('disposable_incomes', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('form_id');
            $table->float('net_from_job');
            $table->float('other_income');
            $table->float('rent');
            $table->float('insurance');
            $table->float('utilities');
            $table->float('cards');
            $table->float('food');
            $table->float('other');
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
        Schema::dropIfExists('disposable_incomes');
    }
};
