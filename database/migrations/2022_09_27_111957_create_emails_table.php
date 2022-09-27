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
        Schema::create('emails', function (Blueprint $table) {
            $table->id();
            // Approval Messages
            $table->text('approval_message');
            $table->text('approval_message_line_two');
            $table->string('link_to_contract');
            $table->text('last_message_approval');
            // Denial Messages
            $table->text('denial_message');
            $table->text('denial_reason');
            $table->text('last_message_rejected');
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
        Schema::dropIfExists('emails');
    }
};
