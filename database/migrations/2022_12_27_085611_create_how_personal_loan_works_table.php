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
        Schema::create('how_personal_loan_works', function (Blueprint $table) {
            $table->id();

            // TITLE LOAN HERO
            $table->string('hero_head');
            $table->text('video_url');
            $table->string('hero_text');
            $table->string('hero_btn');
            $table->string('hero_background');
            $table->boolean('hero_hidden');

            // APPLY SECTION
            $table->string('how_head');
            $table->text('how_text');
            $table->text('how_img');
            $table->boolean('how_hidden');

            // APPLY SECTION
            $table->string('apply_head');
            $table->text('apply_text');
            $table->text('apply_btn');
            $table->text('apply_hidden');

            // NEED SECTION
            $table->text('need_head');
            $table->text('instore_head');
            $table->text('instore_point1');
            $table->text('instore_point2');
            $table->text('instore_point3');
            $table->text('instore_point4');
            $table->text('items_head');
            $table->text('items_point1');
            $table->text('items_point2');
            $table->text('items_point3');
            $table->text('items_point4');
            $table->boolean('need_hidden');

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
        Schema::dropIfExists('how_personal_loan_works');
    }
};
