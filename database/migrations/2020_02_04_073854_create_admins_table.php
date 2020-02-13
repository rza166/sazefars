<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdminsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admins', function (Blueprint $table) {
          $table->bigIncrements('id');
          $table->string('name');
          $table->string('username', 33)->unique();
          $table->string('mobaile' , 13)->unique();
          $table->string('email')->unique();
          $table->timestamp('email_verified_at')->nullable();
          $table->string('password');
          $table->rememberToken();
          $table->boolean('job');//سمت کاربر
          $table->integer('date_ad');
          $table->integer('date_up');
          /*
            * سمت ها در قسمت مدیریت
            *مدیر کل 1
            *مدیر 2
            *نویسنده 3
            *نویسنده 4
          */
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('admins');
    }
}
