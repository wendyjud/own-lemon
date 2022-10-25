<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsuarioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuario', function (Blueprint $table) {
            $table->string('nombre', 20);
            $table->string('ap_Paterno', 12);
            $table->string('ap_Materno', 12)->nullable();
            $table->string('correo', 50)->primary();
            $table->char('contrasena', 8);
            $table->string('tel', 12);
            $table->string('tipo', 1)->default('0')->index('llave_foranea_usuario');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('usuario');
    }
}
