<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEstekhdamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('estekhdams', function (Blueprint $table) {
          $table->bigIncrements('id');
          $table->string('namefamil',40);
          $table->string('kodemeli',10);
          $table->string('madrak',20);
          $table->string('reshte',20);
          $table->string('univercity',30);
          $table->string('tavalod',8);
          $table->string('mobile',10);
          $table->string('tel',10);
          $table->string('email',30);
          $table->string('comment',250);
          $table->string('image',100);
              });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('estekhdams');
    }
}
