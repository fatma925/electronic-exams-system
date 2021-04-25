<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQuestionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('questions', function (Blueprint $table) {
            $table->id();
            $table->string('quest');
            $table->string('type');
            $table->string('complexity');
            $table->integer('degree')->nullable();
            $table->foreignId('chapterId')->constrained('chapters');
            $table->foreignId('subId')->constrained('subjects');
            $table->string('correctA');
            $table->string('WA1');
            $table->string('WA2');
            $table->string('WA3');
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
        Schema::dropIfExists('questions');
    }
}
