<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('becarios', function (Blueprint $table) {
            $table->id();
            $table->string('nombre', 50);
            $table->string('apellidos', 50);
            $table->string('domicilio', 150);
            $table->string('telefono', 50);
            $table->string('correo', 50);
            $table->string('contacto_emergencia', 50);
            $table->string('escuela', 50);
            $table->string('nss', 50);
            $table->string('comprabante_nss', 50);
            $table->string('vac_covid', 50);
            $table->string('cert_vac', 50);
            $table->string('padecimiento', 50);
            $table->string('ine', 50);
            $table->string('const_estudiante', 50);
            $table->string('doc_asig_esc', 50);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('becarios');
    }
};
