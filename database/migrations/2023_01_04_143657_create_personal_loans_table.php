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
        Schema::create('personal_loans', function (Blueprint $table) {
            $table->id();

            // LOAN HERO
            $table->text('hero_head');
            $table->text('hero_text');
            $table->text('hero_img');
            $table->text('hero_box_text');
            $table->text('hero_box_img');
            $table->text('hero_box_head');
            $table->text('hero_box_desc');
            $table->boolean('hero_hidden');

            // HOW SECTION
            $table->text('how_head');
            $table->text('how_img1');
            $table->text('how_point1');
            $table->text('how_img2');
            $table->text('how_point2');
            $table->text('how_img3');
            $table->text('how_point3');
            $table->text('how_text');
            $table->text('how_btn');
            $table->boolean('how_hidden');

            // BENEFITS SECTION
            $table->text('benefit_head');
            $table->text('benefit_text');
            $table->text('benefit_points');
            $table->boolean('benefit_hidden');
            
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
        Schema::dropIfExists('personal_loans');
    }
};
