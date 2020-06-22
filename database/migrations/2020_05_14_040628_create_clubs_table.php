<?php

/**
   * @name:        Create table club
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

class CreateClubsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clubs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('clubname');
            $table->string('streetname');
            $table->integer('streetnumber');
            $table->integer('postal_code');
            $table->string('city');
            $table->string('description',2000);
            $table->string('ambience');
            $table->string('dress_code');
            $table->integer('phone')->unique();
            $table->string('cover_url');
            $table->string('opening_time');
            $table->string('closing_time');
            $table->decimal('lat',9,6);
            $table->decimal('lng',9,6);

            $table->unsignedBigInteger('userid');

            $table->timestamps();
            $table->foreign('userid')->references('id')->on('users')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('clubs');
    }
}
