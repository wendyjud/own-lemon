<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToPagoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('pago', function (Blueprint $table) {
            $table->foreign(['id_Cliente'], 'llave_foranea_cliente_pago')->references(['correo'])->on('usuario');
            $table->foreign(['num_Pedido'], 'llave_foranea_pedido_pago')->references(['num_Pedido'])->on('pedido');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('pago', function (Blueprint $table) {
            $table->dropForeign('llave_foranea_cliente_pago');
            $table->dropForeign('llave_foranea_pedido_pago');
        });
    }
}
