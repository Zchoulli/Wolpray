<?php

/**
   * @name:        Create table user
   * @author:      Zaid - Patrik - Henry
   * @description: Create table in the database
   * @version:     1.0
   * @date         26/05/2020
   * @param        none
   * @return       none
   */

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
            $table->bigIncrements('id');
            $table->string('username');
            $table->string('email');
            $table->string('streetname');
            $table->integer('streetnumber');
            $table->integer('postal_code');
            $table->integer('phone')->unique();
            $table->string('city');
            $table->string('name');
            $table->string('surname');
            $table->string('birthdate');
            $table->string('image_profile');
            $table->string('role');
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
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
        Schema::dropIfExists('users');
    }
}
