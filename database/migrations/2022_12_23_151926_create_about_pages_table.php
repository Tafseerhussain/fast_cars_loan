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
        Schema::create('about_pages', function (Blueprint $table) {
            $table->id();

            // ABOUT HERO
            $table->string('hero_head');
            $table->text('hero_text');
            $table->string('hero_btn');
            $table->string('hero_background');
            $table->boolean('hero_hidden');

            // WHO WE ARE
            $table->string('who_head');
            $table->text('who_text');
            $table->text('who_img1');
            $table->text('who_img2');
            $table->text('who_img3');
            $table->text('who_img4');
            $table->boolean('who_hidden');

            $table->text('offer_head');
            $table->string('offer_point_head_1');
            $table->text('offer_point_text_1');
            $table->string('offer_point_head_2');
            $table->text('offer_point_text_2');
            $table->string('offer_point_head_3');
            $table->text('offer_point_text_3');
            $table->string('offer_point_head_4');
            $table->text('offer_point_text_4');
            $table->boolean('offer_hidden');

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
        Schema::dropIfExists('about_pages');
    }
};
