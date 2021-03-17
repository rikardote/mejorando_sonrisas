@extends('layouts.argon')

@section('content')
<div class="card">
  <div class="card-header">
    <h3 class="mb-0">Detalles del cliente</h3>
  </div>
  <div class="card-body">
    <div class="mb-2">
      <table class="table table-bordered table-striped">
        <tbody>
          <tr>
            <th> Numero de Cliente </th>
            <td> {{ $cliente->id }} </td>
          </tr>
          <tr>
            <th> Nombre </th>
            <td> {{ $cliente->nombre }} </td>
          </tr>
          <tr>
            <th> Edad </th>
            <td> {{ $cliente->age }} años</td>
          </tr>
          <tr>
            <th> E-mail </th>
            <td> {{ $cliente->email }} </td>
          </tr>
          <tr>
            <th> Direccion </th>
            <td> {{ $cliente->direccion }} </td>
          </tr>
          <tr>
            <th> Telefono Principal </th>
            <td> {{ $cliente->telefono_1 }} </td>
          </tr>
          <tr>
            <th> Telefono Secundario </th>
            <td> {{ $cliente->telefono_2 }} </td>
          </tr>
          <tr>
            <th> Fecha de Nacimiento </th>
            <td> {{ $cliente->nacimiento }} </td>
          </tr>
          <tr>
            <th> Sexo </th>
            <td> {{ $cliente->gender }} </td>
          </tr>
          <tr>
            <th> Ocupacion </th>
            <td> {{ $cliente->ocupacion }} </td>
          </tr>
          <tr>
            <th> Ultima Visita al Dentista </th>
            <td> {{ $cliente->ultima }} </td>
          </tr>

        </tbody>
      </table>
    </div>

  </div>
</div>

<div class="card">
    <div class="card-header">
      <h3 class="mb-0">Antecedentes</h3>
    </div>
    <div class="card-body">
      <div class="mb-2">
        <table class="table table-bordered table-striped">
          <tbody>
            <tr>
              <th> Antecedentes Heredo-Familiares </th>
              <td> {{ isset($cliente->historia_clinica->antecedentes_heredo_familiares) ?  $cliente->historia_clinica->antecedentes_heredo_familiares : '' }} </td>
            </tr>
            <tr>
              <th> Antecedentes Personales Patologicos </th>
              <td> {{ isset($cliente->historia_clinica->antecedentes_personales_patologicos) ?  $cliente->historia_clinica->antecedentes_personales_patologicos : '' }} </td>
            </tr>
            <tr>
                <th> Antecedentes Personales No Patologicos </th>
                <td> {{ isset($cliente->historia_clinica->antecedentes_personales_no_patologicos) ?  $cliente->historia_clinica->antecedentes_personales_no_patologicos : '' }} </td>
            </tr>
          </tbody>
        </table>
      </div>

    </div>
  </div>

  <div class="card">
    <div class="card-header">
      <h3 class="mb-0">Historia Clinica</h3>
    </div>
    <div class="card-body">
      <div class="mb-2">
        <table class="table table-bordered table-striped">
          <tbody>
            <tr>
              <th> Alergias </th>
              <td> {{ isset($cliente->historia_clinica->alergias) ?  $cliente->historia_clinica->alergias : '' }} </td>
            </tr>
            <tr>
              <th> Intervenciones Quirurgicas </th>
              <td> {{ isset($cliente->historia_clinica->intervenciones_quirujicas) ?  $cliente->historia_clinica->intervenciones_quirujicas : '' }} </td>
            </tr>
            <tr>
                <th> Medicamentos </th>
                <td> {{ isset($cliente->historia_clinica->medicamentos) ? $cliente->historia_clinica->medicamentos : '' }} </td>
            </tr>
            <tr>
                <th> Complicaciones Con Anestesico </th>
                <td> {{ isset($cliente->historia_clinica->complicaciones_anestesico) ? $cliente->historia_clinica->complicaciones_anestesico : '' }} </td>
            </tr>
            <tr>
                <th> Hemorragias o Tendecia a Sangrado </th>
                <td> {{ isset($cliente->historia_clinica->hemorragias) ? $cliente->historia_clinica->hemorragias : '' }} </td>
            </tr>
            <tr>
                <th> Diabetes Mellitus </th>
                <td> {{ isset($cliente->historia_clinica->diabetes)  ? $cliente->historia_clinica->diabetes : '' }} </td>
            </tr>
            <tr>
                <th> Hipertension </th>
                <td> {{ isset($cliente->historia_clinica->hipertension) ? $cliente->historia_clinica->hipertension : '' }} </td>
            </tr>
            <tr>
                <th> Enfermedades Respiratorias </th>
                <td> {{ isset($cliente->historia_clinica->enfermedades_respiratorias) ? $cliente->historia_clinica->enfermedades_respiratorias : '' }} </td>
            </tr>
            <tr>
                <th> Enfermedades Cardiovasculares </th>
                <td> {{ isset($cliente->historia_clinica->enfermedades_cardiovasculares) ? $cliente->historia_clinica->enfermedades_cardiovasculares : '' }} </td>
            </tr>
            <tr>
                <th> Hepatitis </th>
                <td> {{ isset($cliente->historia_clinica->hepatitis) ? $cliente->historia_clinica->hepatitis : '' }} </td>
            </tr>
            <tr>
                <th> Embarazo </th>
                <td> {{ isset($cliente->historia_clinica->embarazo) ? $cliente->historia_clinica->embarazo : '' }} </td>
            </tr>
            <tr>
                <th> Otros </th>
                <td> {{ isset($cliente->historia_clinica->otro) ? $cliente->historia_clinica->otro : '' }} </td>
            </tr>
            <tr>
                <th> Padecimiento Actual </th>
                <td> {{ isset($cliente->historia_clinica->padecimiento_actual) ? $cliente->historia_clinica->padecimiento_actual : '' }} </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
    <a class="btn btn-sm btn-default" href="{{ route('clientes.index') }}">Volver</a>
  </div>
@endsection
