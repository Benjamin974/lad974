<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDeliveryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('status_delivery', function (Blueprint $table) {
            $table->id();
            $table->string('status');
        });
        Schema::create('delivery', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('id_delivery_man')->unsigned();
            $table->foreign('id_delivery_man')->references('id')->on('delivery_man');
            $table->bigInteger('id_command')->unsigned();
            $table->foreign('id_command')->references('id')->on('command');
            $table->bigInteger('id_status')->unsigned();
            $table->foreign('id_status')->references('id')->on('status_delivery');

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
        Schema::dropIfExists('delivery');
        Schema::dropIfExists('status_delivery');
        Schema::enableForeignKeyConstraints();
    }
}
