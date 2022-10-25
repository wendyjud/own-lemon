<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePagoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pago', function (Blueprint $table) {
            $table->integer('id_Pago')->primary();
            $table->integer('num_Pedido')->index('llave_foranea_pedido_pago');
            $table->string('id_Cliente', 50)->index('llave_foranea_cliente_pago');
            $table->timestamp('fecha_Pago')->useCurrentOnUpdate()->useCurrent();
            $table->float('monto', 10, 0);
            $table->boolean('estado_Pago')->default(false);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pago');
    }
}
