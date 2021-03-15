<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clientes', function (Blueprint $table) {
            $table->id();
            $table->string('direccion');
            $table->string('telefono_1');
            $table->string('telefono_2')->nullable();
            $table->string('nombre');
            $table->string('responsable')->nullable();
            $table->string('email')->unique();
            $table->date('fecha_nacimiento');
            $table->string('ocupacion');
            $table->foreignId('refer_id')->constrained();
            $table->string('gender');
            $table->string('ultima_visita');
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
        Schema::dropIfExists('clientes');
    }
}
