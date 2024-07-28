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
        Schema::create('evaluetion_personal_releaseds', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('evaluetion_id');
            $table->unsignedBigInteger('user_id');
            $table->timestamps();

            $table->foreign('evaluetion_id')->references('id')->on('evaluetion_personals');
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('evaluetion_personal_releaseds');
    }
};
