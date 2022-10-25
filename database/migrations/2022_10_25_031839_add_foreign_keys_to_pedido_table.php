<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToPedidoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('pedido', function (Blueprint $table) {
            $table->foreign(['rfc_Empresa'], 'llave_foranea_pedido')->references(['id_empresa'])->on('empresa');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('pedido', function (Blueprint $table) {
            $table->dropForeign('llave_foranea_pedido');
        });
    }
}
