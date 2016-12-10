<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('nickname');
            $table->string('avatar')->default('https://api.adorable.io/avatars/285/' . substr(md5(base64_encode(uniqid(rand(),true))),0,10) . '@adorable.io.png');
            $table->string('cover')->default('/assets/images/cover/cover' . rand(1,5) . '.jpeg');
            $table->string('address')->default('null');
            $table->boolean('public')->default(0);
            $table->rememberToken();
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
        Schema::drop('users');
    }
}
