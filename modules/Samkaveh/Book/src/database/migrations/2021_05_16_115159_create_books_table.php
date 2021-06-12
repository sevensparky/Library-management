<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->string('title')->unique();
            $table->string('slug');
            $table->string('print_series');
            $table->string('publishers_name');
            $table->string('head_id');
            $table->string('publication_details');
            $table->string('ISBN')->unique();
            $table->string('price');
            $table->text('image');
            $table->string('description')->nullable();
            $table->tinyInteger('count');
            $table->integer('pages');
            $table->string('weigth');
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
        Schema::dropIfExists('books');
    }
}
