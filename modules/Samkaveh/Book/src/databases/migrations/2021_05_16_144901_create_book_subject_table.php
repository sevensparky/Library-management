<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookSubjectTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('book_subject', function (Blueprint $table) {
            $table->id();
            $table->foreignId('book_id');
            $table->foreignId('subject_id');
            
            $table->foreign('book_id')->references('id')->on('books')->onDelete('CASCADE')->onUpdate('CASCADE');
            $table->foreign('subject_id')->references('id')->on('subjects')->onDelete('CASCADE')->onUpdate('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('book_subject');
    }
}
