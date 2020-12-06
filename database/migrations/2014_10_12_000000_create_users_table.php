<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->id();
            $table->string('name');
            $table->integer('number')->unique();
            $table->date('date');
            $table->string('dep');
            $table->string('group');
            $table->string('customer');
            $table->integer('postal');
            $table->string('add');
            $table->string('tel');
            $table->string('mobile');
            $table->string('emergency');
            $table->string('relation');
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
