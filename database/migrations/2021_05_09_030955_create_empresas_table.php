<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmpresasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('enterprise', function (Blueprint $table) {
            $table->id('idEnterprise');
            $table->string('enterpriseName', 85)->collate('utf8mb4_general_ci');
            $table->string('address', 95)->collate('utf8mb4_general_ci');
            $table->string('phoneNumber', 25)->collate('utf8mb4_general_ci');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('enterprise');
    }
}
