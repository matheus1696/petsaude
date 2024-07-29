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
        Schema::create('evaluetion_personals', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->date('date_start')->nullable();
            $table->date('date_end')->nullable();
            $table->string('type');
            $table->text('description')->nullable();
            $table->boolean('released')->default(FALSE);
            $table->unsignedBigInteger('to_specific_group_id')->nullable();
            $table->timestamps();

            $table->foreign('to_specific_group_id')->references('id')->on('company_organizations');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('evaluetion_personals');
    }
};
