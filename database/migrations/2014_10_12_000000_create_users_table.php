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
        Schema::create('role', function (Blueprint $table) {
            $table->id();
            $table->string('role');
        });

        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->bigInteger('id_role')->unsigned();
            $table->foreign('id_role')->references('id')->on('role');
            $table->rememberToken();
            $table->timestamps();
        });

        Schema::create('delivery_address', function (Blueprint $table) {
            $table->id();
            $table->string('address');
            $table->integer('postal_code');
            $table->integer('phone_number');
            $table->bigInteger('id_user')->unsigned();
            $table->foreign('id_user')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::disableForeignKeyConstraints();
        Schema::dropIfExists('delivery_address');
        Schema::dropIfExists('users');
        Schema::dropIfExists('role');
        Schema::enableForeignKeyConstraints();
    }
}
