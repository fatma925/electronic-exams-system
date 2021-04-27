<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('_subjects', function (Blueprint $table) {
            $table->id();
            $table->string('subTitle');
            $table->char('subCode')->nullable()->unique();
            $table->foreignId('profId')->constrained('professors');
            $table->foreignId('levelIdId')->constrained('_levels');
            $table->foreignId('departId')->constrained('_departs');
            
            
            
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
        Schema::dropIfExists('_subjects');
    }
}
