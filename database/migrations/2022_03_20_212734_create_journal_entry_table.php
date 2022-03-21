<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJournalEntryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('journal_entry', function (Blueprint $table) {
            $table->id();
            $table->string('before_entry')->nullable();
            $table->string('after_entry')->nullable();
            $table->boolean('fortune_telling')->nullable();
            $table->boolean('over_estimating_danger')->nullable();   
            $table->boolean('catastrophizing')->nullable();
            $table->boolean('mind_reading')->nullable();
            $table->boolean('black_and_white_thinking')->nullable(); 
            $table->boolean('over_generalizing')->nullable();    
            $table->boolean('negative_brain_filter')->nullable();
            $table->boolean('should_statements')->nullable();
            $table->boolean('emotional_reasoning')->nullable();
            $table->boolean('unsure')->nullable();
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
        Schema::dropIfExists('journal_entry');
    }
}
