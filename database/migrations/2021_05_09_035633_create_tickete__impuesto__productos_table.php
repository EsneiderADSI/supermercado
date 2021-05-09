<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTicketeImpuestoProductosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ticket_tax_product', function (Blueprint $table) {
            $table->id('idTicket_TAX_PRODUCT');
            $table->date('dateInit');
            $table->foreignId('Ticket_idTicket')->references('idTicket')->on('ticket')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ticket_tax_product');
    }
}
