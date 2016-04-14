<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuestionsTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('questions', function(Blueprint $table)
        {
            $table->increments('id');
            $table->text('question');
            $table->string('seo_question');
            $table->string('desc');
            $table->string('keywords');
            $table->string('slug', 200)->unique();
            $table->text('answer');
            $table->string('ask_person');
            $table->string('answer_person');
            $table->string('ask_address')->nullable();
            $table->string('ask_phone')->nullable();
            $table->string('ask_email')->nullable();
            $table->string('image');
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
        Schema::drop('questions');
    }

}
