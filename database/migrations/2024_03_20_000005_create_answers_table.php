<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('answers', function (Blueprint $table) {
            $table->id();
            $table->string('answer');
            $table->foreignId('child_question_id')->nullable()->constrained('questions')->onDelete('cascade');
            $table->foreignId('father_question_id')->nullable()->constrained('questions')->onDelete('cascade');
            $table->text('recommendation')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('answers');
    }
}; 