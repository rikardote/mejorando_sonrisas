<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClinicHistoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clinic_histories', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('cliente_id')->unsigned();
            $table->foreign('cliente_id')->references('id')->on('clientes');
            $table->string('antecedentes_heredo_familiares')->nullable();
            $table->string('antecedentes_personales_patologicos')->nullable();
            $table->string('antecedentes_personales_no_patologicos')->nullable();
            $table->string('alergias')->nullable();
            $table->string('intervenciones_quirujicas')->nullable();
            $table->string('medicamentos')->nullable();
            $table->string('complicaciones_anestesico')->nullable();
            $table->string('hemorragias')->nullable();
            $table->string('diabetes')->nullable();
            $table->string('hipertension')->nullable();
            $table->string('enfermedades_respiratorias')->nullable();
            $table->string('enfermedades_cardiovasculares')->nullable();
            $table->string('hepatitis')->nullable();
            $table->string('embarazo')->nullable();
            $table->string('otro')->nullable();
            $table->string('padecimiento_actual')->nullable();
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
        Schema::dropIfExists('clinic_histories');
    }
}
