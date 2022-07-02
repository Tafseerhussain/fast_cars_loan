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
            $table->string('hero_head')->default('Lorem Ipsum dolor sit amet consectetur.');
            $table->string('hero_text')->default('Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam obcaecati, repudiandae est perferendis odio suscipit ea inventore laudantium expedita.');
            $table->string('hero_btn')->default('Apply for Loan');
            $table->string('form_head')->default('Have your cash in hand with a few clicks!');
            $table->string('hero_background')->default('img/home/hero-bg.jpg');

            // STEPS SECTION
            $table->string('steps_heading')->default('3 Easy Steps to Apply for Fast Title Loans Online or Near You!');
            
            $table->string('step_one_heading')->default('Click or Call');
            $table->string('step_one_text')->default('The loan process is extremely fast and hassle-free. Apply over the phone or online in 30 minutes or less');
            $table->string('step_one_image')->default('icons/call.svg');

            $table->string('step_two_heading')->default('Submit Info Text');
            $table->string('step_two_text')->default('The loan process is extremely fast and hassle-free. Apply over the phone or online in 30 minutes or less');
            $table->string('step_two_image')->default('icons/customer-info.svg');

            $table->string('step_three_heading')->default('Get Your Money');
            $table->string('step_three_text')->default('The loan process is extremely fast and hassle-free. Apply over the phone or online in 30 minutes or less');
            $table->string('step_three_image')->default('icons/get-money.svg');

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
