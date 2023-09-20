<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Category extends Migration
{

    public function up()
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->id(); // Auto-incremental ID field
            $table->string('category_title');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('categories');
    }
}
