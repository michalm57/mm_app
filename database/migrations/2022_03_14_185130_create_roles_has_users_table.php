<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('roles_has_users', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('users_id')->unsigned()->nullable();
            $table->integer('roles_id')->nullable()->unsigned();
            $table->timestamps();
        });
        Schema::table('roles_has_users', function (Blueprint $table) {
            $table->foreign('users_id')
                ->references('id')
                ->on('users');
        });

        Schema::table('roles_has_users', function (Blueprint $table) {
            $table->foreign('roles_id')
                ->references('id')
                ->on('roles');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('roles_has_users');
    }
};
