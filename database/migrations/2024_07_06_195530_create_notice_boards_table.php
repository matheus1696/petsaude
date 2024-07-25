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
        Schema::create('notice_boards', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();
            $table->text('description')->nullable();
            //Informa o grupo ou os usuários específicos
            $table->unsignedBigInteger('to_specific_user_id');
            $table->unsignedBigInteger('notice_level_id');            
            $table->boolean('mark_read')->default(false);
            $table->timestamps();

            $table->foreign('notice_level_id')->references('id')->on('notice_levels');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('notice_boards');
    }
};
