<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostMigrations extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('devscratch_post', function(Blueprint $table){
          $table->increments('post_id');
          $table->string('post_title');
          $table->string('post_category');
          $table->text('post_thumbnails');
          $table->text('post_body');
          $table->string('post_author');
          $table->string('post_view');
          $table->boolean('post_status')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
