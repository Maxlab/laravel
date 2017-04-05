<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTaggablesTable extends Migration
{

    public function up()
    {
        if (Schema::hasTable('taggables')) {
            Schema::drop('taggables');
        }

        Schema::create('taggables', function (Blueprint $table) {
            $table->unsignedInteger('tag_id');
            $table->unsignedInteger('taggable_id');
            $table->string('taggable_type');
            $table->index(['tag_id', 'taggable_type', 'taggable_id']);
        });
    }

    public function down()
    {
        Schema::drop('taggables');
    }
}
