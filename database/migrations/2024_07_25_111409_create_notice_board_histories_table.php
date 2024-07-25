<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('notice_board_histories', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('notice_id');
            $table->unsignedBigInteger('to_specific_user_id');
            $table->boolean('mark_read')->default(false);
            $table->timestamps();

            $table->foreign('notice_id')->references('id')->on('notice_boards');
            $table->foreign('to_specific_user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('notice_board_histories');
    }
};
