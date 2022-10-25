<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFormulariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('formularios', function (Blueprint $table) {
            $table->timestamp('fecha')->useCurrentOnUpdate()->useCurrent()->primary();
            $table->string('usuario', 50)->nullable()->index('llave_foranea_formularios');
            $table->string('asunto', 100)->nullable();
            $table->boolean('resolucion')->nullable()->default(false);
            $table->string('respuesta', 200)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('formularios');
    }
}
