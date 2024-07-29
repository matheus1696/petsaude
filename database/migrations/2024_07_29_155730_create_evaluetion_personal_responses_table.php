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
        Schema::create('evaluetion_personal_responses', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('evaluetion_personal_id');
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('response');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('evaluetion_personal_responses');
    }
};
