<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGalleryPhotoTable extends Migration
{

    public function up()
    {
        Schema::create('gallery_photo', function(Blueprint $table) {
            $table->increments('id');
            $table->integer('gallery_id')->unsigned()->index();
            $table->integer('photo_id')->unsigned()->index();
            $table->foreign('gallery_id')
                ->references('id')
                ->on('galleries');
            $table->foreign('photo_id')
                ->references('id')
                ->on('photos');

        });
    }

    public function down()
    {
        Schema::drop('gallery_photo');
    }
}
