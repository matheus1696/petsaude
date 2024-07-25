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
        Schema::create('evaluetions', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->date('date_start');
            $table->date('date_end');            
            $table->text('description')->nullable();
            $table->unsignedBigInteger('occupation_id');
            $table->timestamps();

            $table->foreign('occupation_id')->references('id')->on('company_occupations');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('evaluetions');
    }
};
