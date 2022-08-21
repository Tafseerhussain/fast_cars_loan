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
        Schema::create('acknowledgements', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('form_id');
            $table->string('filed_for_bankruptcy');
            $table->date('filed_date')->nullable();
            $table->string('status');
            $table->string('suit_legal_judgement');
            $table->string('sign');
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
        Schema::dropIfExists('anknowledgements');
    }
};
