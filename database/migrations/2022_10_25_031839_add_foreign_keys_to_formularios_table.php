<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToFormulariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('formularios', function (Blueprint $table) {
            $table->foreign(['usuario'], 'llave_foranea_formularios')->references(['correo'])->on('usuario');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('formularios', function (Blueprint $table) {
            $table->dropForeign('llave_foranea_formularios');
        });
    }
}
