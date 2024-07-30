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
        Schema::create('evaluation_releaseds', function (Blueprint $table) {
            $table->id();
            $table->date('date_start');
            $table->date('date_end');
            $table->boolean('response')->default(FALSE); //Infoma que o usuário respondeu
            $table->unsignedBigInteger('evaluation_id');
            $table->unsignedBigInteger('user_id'); // O usuário que foi liberado
            $table->timestamps();

            $table->foreign('evaluation_id')->references('id')->on('evaluation_lists');
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('evaluation_releaseds');
    }
};
