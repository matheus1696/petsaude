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
        Schema::create('evaluations', function (Blueprint $table) {
            $table->id();
            $table->string('type');
            $table->text('question_1');
            $table->text('value_1');
            $table->text('question_2')->nullable();
            $table->text('value_2')->nullable();
            $table->text('question_3')->nullable();
            $table->text('value_3')->nullable();
            $table->text('question_4')->nullable();
            $table->text('value_4')->nullable();
            $table->text('question_5')->nullable();
            $table->text('value_5')->nullable();
            $table->text('question_6')->nullable();
            $table->text('value_6')->nullable();
            $table->text('question_7')->nullable();
            $table->text('value_7')->nullable();
            $table->text('question_8')->nullable();
            $table->text('value_8')->nullable();
            $table->text('question_9')->nullable();
            $table->text('value_9')->nullable();
            $table->unsignedBigInteger('user_id_evaluated');
            $table->unsignedBigInteger('user_id_response');
            $table->timestamps();

            $table->foreign('user_id_evaluated')->references('id')->on('users');
            $table->foreign('user_id_response')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('evaluations');
    }
};
