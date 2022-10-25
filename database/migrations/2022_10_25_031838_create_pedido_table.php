<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePedidoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pedido', function (Blueprint $table) {
            $table->integer('num_Pedido')->primary();
            $table->integer('cantidad');
            $table->string('modalidad', 25);
            $table->string('calle', 30);
            $table->integer('num');
            $table->string('col', 20);
            $table->string('estado', 15);
            $table->integer('cod_Postal');
            $table->string('rfc_Empresa', 13)->index('llave_foranea_pedido');
            $table->timestamp('fecha_Pedido')->useCurrentOnUpdate()->useCurrent();
            $table->string('nota', 100)->nullable();
            $table->string('aprobacion', 2);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pedido');
    }
}
