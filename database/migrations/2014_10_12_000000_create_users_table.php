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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name', 100);
            $table->string('apellidos', 100);
            $table->string('domicilio', 150);
            $table->string('telefono', 100);
            $table->string('email')->unique();
            $table->string('contacto_emergencia', 100);
            $table->string('escuela', 100);
            $table->string('nss', 100);
            $table->string('comprabante_nss');
            $table->string('vac_covid', 100);
            $table->string('cert_vac');
            $table->string('padecimiento', 100);
            $table->string('ine');
            $table->string('const_estudiante', 100);
            $table->string('doc_asig_esc');
            $table->string('password');
            $table->timestamp('email_verified_at')->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
};
