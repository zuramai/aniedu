<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserChoiceAnswerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_choice_answers', function (Blueprint $table) {
            $table->id();
            $table->foreignId('play_id')->constrained('plays')->onDelete('cascade');
            $table->foreignId('choice_id')->constrained('question_choices');
            $table->boolean('is_correct')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_choice_answer');
    }
}
