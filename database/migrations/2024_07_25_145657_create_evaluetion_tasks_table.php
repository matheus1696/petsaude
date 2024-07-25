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
        Schema::create('evaluetion_tasks', function (Blueprint $table) {
            $table->id();
            $table->text('question');
            $table->integer('order');
            $table->string('type');
            $table->text('description')->nullable();
            $table->unsignedBigInteger('evaluetion_id');
            $table->timestamps();

            $table->foreign('evaluetion_id')->references('id')->on('evaluetions');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('evaluetion_tasks');
    }
};
