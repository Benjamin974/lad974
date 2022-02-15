<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommandHasProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('command_has_products', function (Blueprint $table) {
            $table->id();
            $table->string('quantite');
            $table->bigInteger('id_product')->unsigned();
            $table->foreign('id_product')->references('id')->on('product');
            $table->bigInteger('id_company')->unsigned();
            $table->foreign('id_company')->references('id')->on('company');
            $table->bigInteger('id_command')->unsigned();
            $table->foreign('id_command')->references('id')->on('command');

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
        Schema::dropIfExists('command_has_products');
    }
}
