@extends('tablar::page')

@section('title', 'View Paciente')

@section('content')
    <!-- Page header -->
    <div class="page-header d-print-none">
        <div class="container-xl">
            <div class="row g-2 align-items-center">
                <div class="col">
                    <h2 class="page-title">
                        {{ __('Paciente') }}
                    </h2>
                </div>
                <!-- Page title actions -->
                <div class="col-12 col-md-auto ms-auto d-print-none">
                    <div class="btn-list">
                        <a href="{{ route('pacientes.index') }}" class="btn btn-primary d-none d-sm-inline-block">
                            Regresar
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Page body -->
    <div class="page-body">
        <div class="container-xl">
            <div class="row row-deck row-cards">
                <div class="col-12">
                    @if(config('tablar','display_alert'))
                        @include('tablar::common.alert')
                    @endif
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Información del paciente</h3>
                        </div>
                        <div class="card-body">
                            

<div class="form-group">
<strong>Nombre:</strong>
{{ $paciente->Nombre }}
</div>
<div class="form-group">
<strong>Ap Paterno:</strong>
{{ $paciente->Ap_Paterno }}
</div>
<div class="form-group">
<strong>Ap Materno:</strong>
{{ $paciente->Ap_Materno }}
</div>
<div class="form-group">
<strong>Domicilio:</strong>
{{ $paciente->Domicilio }}
</div>
<div class="form-group">
<strong>Telefono:</strong>
{{ $paciente->Telefono }}
</div>
<div class="form-group">
<strong>Correo Electronico:</strong>
{{ $paciente->Correo_Electronico }}
</div>
<div class="form-group">
<strong>Fecha Nac:</strong>
{{ $paciente->Fecha_Nac }}
</div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('rutina.index2')
@endsection


