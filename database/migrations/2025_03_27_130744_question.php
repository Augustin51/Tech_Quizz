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
        Schema::create('question', function (Blueprint $table) {
            $table->id('id_question');
            $table->integer('id_quiz');
            $table->integer('nb_question');
            $table->string('name_question');
            $table->string('f_answer');
            $table->string('s_answer');
            $table->string('t_answer');
            $table->string('fth_answer');
            $table->string('real_answer');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('question');
    }
};
