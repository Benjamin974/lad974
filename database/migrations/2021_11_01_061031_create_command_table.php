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

        Schema::create('command', function (Blueprint $table) {
            $table->id();
            $table->string('quantite');
            $table->bigInteger('id_status')->unsigned();
            $table->foreign('id_status')->references('id')->on('status_command');
            $table->bigInteger('id_product')->unsigned();
            $table->foreign('id_product')->references('id')->on('product');
            $table->bigInteger('id_user')->unsigned();
            $table->foreign('id_user')->references('id')->on('user');
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
        Schema::dropIfExists('status_command');
        Schema::enableForeignKeyConstraints();

    }
}
