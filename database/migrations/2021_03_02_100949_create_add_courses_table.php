<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAddCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('add_courses', function (Blueprint $table) {
            $table->id();
            $table->string('year');
            $table->string('degree');
            $table->string('semester');
            $table->string('subject');
            $table->string('question_1');
            $table->string('marks_1');
            $table->string('answer_1');
            $table->string('question_2');
            $table->string('marks_2');
            $table->string('answer_2');
            $table->string('question_3');
            $table->string('marks_3');
            $table->string('answer_3');
            $table->string('price');
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
        Schema::dropIfExists('add_courses');
    }
}
