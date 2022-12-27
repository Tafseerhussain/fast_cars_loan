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
        Schema::create('how_title_loan_works', function (Blueprint $table) {
            $table->id();

            // TITLE LOAN HERO
            $table->string('hero_head');
            $table->text('video_url');
            $table->string('hero_text');
            $table->string('hero_btn');
            $table->string('hero_background');
            $table->boolean('hero_hidden');

            // WHAT SECTION
            $table->string('what_head');
            $table->text('what_text');
            $table->text('what_img');
            $table->boolean('what_hidden');

            // REQUIREMENT BY STATE SECTION
            $table->boolean('state_hidden');
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
        Schema::dropIfExists('how_title_loan_works');
    }
};
