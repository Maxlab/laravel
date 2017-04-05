<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePaymentsTable extends Migration
{

    public function up()
    {
        if (Schema::hasTable('payments')) {
            Schema::drop('payments');
        }
        Schema::create('payments', function(Blueprint $table) {
            $table->increments('id');
            $table->string('title')->nullable();
            $table->decimal('price', 10, 2);
            $table->unsignedInteger('project_id');
            $table->foreign('project_id')
                ->references('id')
                ->on('projects');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down()
    {
        Schema::drop('payments');
    }
}
