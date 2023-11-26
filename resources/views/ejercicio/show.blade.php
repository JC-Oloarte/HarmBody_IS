@extends('tablar::page')

@section('title', 'View Ejercicio')

@section('content')
    <!-- Page header -->
    <div class="page-header d-print-none">
        <div class="container-xl">
            <div class="row g-2 align-items-center">
                <div class="col">
                    <!-- Page pre-title -->

                    <h2 class="page-title">
                        {{ __('Ejercicio') }}
                    </h2>
                </div>
                <!-- Page title actions -->
                <div class="col-12 col-md-auto ms-auto d-print-none">
                    <div class="btn-list">
                        <a href="{{ route('ejercicios.index') }}" class="btn btn-primary d-none d-sm-inline-block">
                            
                            </svg>
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
                            <h3 class="card-title">Detalles del ejercicio</h3>
                        </div>
                        <div class="card-body">
                            

<div class="form-group">
<strong>Nombre:</strong>
{{ $ejercicio->Nombre }}
</div>
<div class="form-group">
<strong>Descripcion:</strong>
{{ $ejercicio->Descripcion }}
</div>
<div class="form-group">
    <strong>Estatus:</strong>
    {{ $ejercicio->Estatus == 1 ? 'Activo' : 'Inactivo' }}
</div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


