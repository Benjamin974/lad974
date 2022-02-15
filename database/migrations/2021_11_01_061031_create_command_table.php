<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommandTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('status_command', function (Blueprint $table) {
            $table->id();
            $table->string('status');
        });

        Schema::create('address', function (Blueprint $table) {
            $table->id();
            $table->string('address');
            $table->string('name');
            $table->string('pays');
            $table->string('postal_code');
            $table->string('ville');
            $table->bigInteger('id_user')->unsigned();
            $table->foreign('id_user')->references('id')->on('users');
            $table->timestamps();

        });


        Schema::create('command', function (Blueprint $table) {
            $table->id();
            $table->integer('price');
            $table->bigInteger('id_status')->unsigned();
            $table->foreign('id_status')->references('id')->on('status_command');
            $table->bigInteger('id_user')->unsigned();
            $table->foreign('id_user')->references('id')->on('users');
            $table->bigInteger('id_delivery_address')->unsigned();
            $table->foreign('id_delivery_address')->references('id')->on('address');
            $table->bigInteger('id_facturation_address')->unsigned();
            $table->foreign('id_facturation_address')->references('id')->on('address');
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
        Schema::disableForeignKeyConstraints();
        Schema::dropIfExists('command');
        Schema::dropIfExists('address');
        Schema::dropIfExists('status_command');
        Schema::enableForeignKeyConstraints();
    }
}
