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
            $table->string('phone');
            $table->string('password');
            $table->integer('university_id')->unsigned();
            $table->date('birth');
            $table->tinyInteger('role')->default(0);//0 = Student, 1 = Admin, 2= Super Admin
            $table->double('balance')->default(0);
            $table->rememberToken();
            $table->timestamps();
            //
            $table->foreign('university_id')->references('id')->on('universities');

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
