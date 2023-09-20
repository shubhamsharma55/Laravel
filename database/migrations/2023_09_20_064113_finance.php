<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Finance extends Migration
{

    public function up()
    {
        Schema::create('finances', function (Blueprint $table) {
            $table->id(); // Auto-incremental ID field
            $table->string('title');
            $table->string('category');
            $table->text('description');
            $table->integer('value');
            $table->unsignedBigInteger('user_id'); // Foreign key for the user relationship
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('finances');
    }
}
