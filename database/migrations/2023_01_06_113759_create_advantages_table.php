<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('advantages', function (Blueprint $table) {
            $table->id();

            // LOAN HERO
            $table->text('hero_head');
            $table->text('hero_text');
            $table->text('hero_img');
            $table->text('hero_btn');
            $table->boolean('hero_hidden');

            // ADVANTAGES
            $table->text('advantage_img1');
            $table->text('advantage_head1');
            $table->text('advantage_text1');

            $table->text('advantage_img2');
            $table->text('advantage_head2');
            $table->text('advantage_text2');

            $table->text('advantage_img3');
            $table->text('advantage_head3');
            $table->text('advantage_text3');

            $table->text('advantage_img4');
            $table->text('advantage_head4');
            $table->text('advantage_text4');

            $table->text('advantage_img5');
            $table->text('advantage_head5');
            $table->text('advantage_text5');

            $table->text('advantage_img6');
            $table->text('advantage_head6');
            $table->text('advantage_text6');

            $table->text('advantage_img7');
            $table->text('advantage_head7');
            $table->text('advantage_text7');
            $table->boolean('advantage_hidden');

            $table->text('get_head');
            $table->text('get_text');
            $table->text('get_btn1');
            $table->text('get_btn2');
            $table->text('get_img');
            $table->boolean('get_hidden');

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('advantages');
    }
};
