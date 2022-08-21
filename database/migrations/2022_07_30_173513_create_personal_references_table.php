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
        Schema::create('personal_references', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('form_id');
            $table->string('ref1_first_name');
            $table->string('ref1_last_name');
            $table->string('ref1_relation');
            $table->string('ref1_phone');
            $table->string('ref2_first_name')->nullable();
            $table->string('ref2_last_name')->nullable();
            $table->string('ref2_relation')->nullable();
            $table->string('ref2_phone')->nullable();
            $table->string('ref3_first_name')->nullable();
            $table->string('ref3_last_name')->nullable();
            $table->string('ref3_relation')->nullable();
            $table->string('ref3_phone')->nullable();
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
        Schema::dropIfExists('personal_references');
    }
};
