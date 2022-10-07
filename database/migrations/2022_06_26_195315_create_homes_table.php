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
        Schema::create('homes', function (Blueprint $table) {
            $table->id();

            // HOME HERO
            $table->string('hero_head');
            $table->string('hero_text');
            $table->string('hero_btn');
            $table->string('form_head');
            $table->string('hero_background');
            $table->boolean('hero_hidden');

            // STEPS SECTION
            $table->string('steps_heading');  
            $table->string('step_one_heading');
            $table->string('step_one_text');
            $table->string('step_one_image');
            $table->string('step_two_heading');
            $table->string('step_two_text');
            $table->string('step_two_image');
            $table->string('step_three_heading');
            $table->string('step_three_text');
            $table->string('step_three_image');
            $table->boolean('steps_hidden');

            // PRODUCTS SECTION
            $table->string('product_heading');
            $table->text('product_subheading');
            $table->string('product_points');
            $table->longText('product_text');
            $table->string('product_image');
            $table->boolean('product_hidden');

            // WHY GET FUNDED SECTION
            $table->text('funding_heading');
            $table->text('funding_subheading');
            $table->text('funding_background');
            $table->string('funding_card_one_image');
            $table->string('funding_card_one_heading');
            $table->text('funding_card_one_text');
            $table->string('funding_card_two_image');
            $table->string('funding_card_two_heading');
            $table->text('funding_card_two_text');
            $table->string('funding_card_three_image');
            $table->string('funding_card_three_heading');
            $table->text('funding_card_three_text');
            $table->string('funding_card_four_image');
            $table->string('funding_card_four_heading');
            $table->text('funding_card_four_text');
            $table->boolean('funding_hidden');

            // VIDEO SECTION
            $table->text('video_heading');
            $table->text('video_text_one');
            $table->text('video_text_two');
            $table->string('video_image');
            $table->text('video_link');
            $table->boolean('video_hidden');

            // EASY CASH SECTION
            $table->text('easy_cash_heading');
            $table->text('easy_cash_text');
            $table->text('easy_cash_heading_two');
            $table->text('easy_cash_text_two');
            $table->text('easy_cash_image');
            $table->text('easy_cash_advantages');
            $table->boolean('easy_cash_hidden');

            // CUSTOMER PORTAL SECTION
            $table->text('portal_heading');
            $table->text('portal_card_one_text');
            $table->text('portal_card_two_text');
            $table->text('portal_card_three_text');
            $table->text('portal_card_four_text');
            $table->text('portal_card_one_image');
            $table->text('portal_card_two_image');
            $table->text('portal_card_three_image');
            $table->text('portal_card_four_image');
            $table->boolean('portal_hidden');

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
        Schema::dropIfExists('homes');
    }
};
