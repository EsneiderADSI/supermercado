<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product', function (Blueprint $table) {
            $table->id('idPRODUCT');
            $table->string('nameProduct', 45)->collate('utf8mb4_general_ci');
            $table->integer('productState');
            $table->foreignId('provider_idProvider')->references('idProvider')->on('provider')->onDelete('cascade');
            $table->foreignId('enterprise_idEnterprise')->references('idEnterprise')->on('enterprise')->onDelete('cascade');
            $table->foreignId('productType_idproductType')->references('idPRODUCTType')->on('producttype')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('product');
    }
}
