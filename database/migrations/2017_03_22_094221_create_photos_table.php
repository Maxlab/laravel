<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePhotosTable extends Migration
{

    public function up()
    {
        Schema::create('photos', function(Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('image');
            // Constraints declaration
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down()
    {
        Schema::drop('photos');
    }
}
