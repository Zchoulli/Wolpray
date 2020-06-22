<?php

/**
   * @name:        Create table bills
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

class CreateBillsTable extends Migration
{/**
     * Run the migrations.
     *
     * @return void
     */
     public function up()
     {
         Schema::create('bills', function (Blueprint $table) {
             $table->bigIncrements('id');
             $table->string('nameClub');
             $table->string('manager');
             $table->string("date");
             $table->double('balance', 8, 2);
             $table->unsignedBigInteger('clubid');
             $table->foreign('clubid')->references('id')->on('clubs')->onDelete('cascade');
             $table->unsignedBigInteger('userid');
             $table->foreign('userid')->references('id')->on('users')->onDelete('cascade');
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
         Schema::dropIfExists('bills');
     }
}
