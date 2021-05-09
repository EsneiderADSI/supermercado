<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateImpuestoProductosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('taxt_product', function (Blueprint $table) {
            $table->id('idTAX_PRODUCT');
            $table->date('dateInit');
            $table->foreignId('Product_idProduct')->references('idPRODUCT')->on('product')->onDelete('cascade');
            $table->foreignId('Tax_idTax')->references('idTAX')->on('tax')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('taxt_product');
    }
}
