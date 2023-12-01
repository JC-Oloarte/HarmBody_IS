@extends('tablar::page')

@section('title', 'View Permiso Cat')

@section('content')
    <!-- Page header -->
    <div class="page-header d-print-none">
        <div class="container-xl">
            <div class="row g-2 align-items-center">
                <div class="col">
                    <!-- Page pre-title -->
                    <h2 class="page-title">
                        {{ __('Permiso') }}
                    </h2>
                </div>
                <!-- Page title actions -->
                <div class="col-12 col-md-auto ms-auto d-print-none">
                    <div class="btn-list">
                        <a href="{{ route('permiso-cats.index') }}" class="btn btn-primary d-none d-sm-inline-block">
                            <!-- Download SVG icon from http://tabler-icons.io/i/plus -->
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
                            <h3 class="card-title">Detalles del permiso</h3>
                        </div>
                        <div class="card-body">
                            
<div class="form-group">
<strong>Id Permiso:</strong>
{{ $permisoCat->id_permiso }}
</div>
<div class="form-group">
<strong>Nombre:</strong>
{{ $permisoCat->Nombre }}
</div>
<div class="form-group">
<strong>Fecha De Alta:</strong>
{{ $permisoCat->Fecha_de_alta }}
</div>
<div class="form-group">
<strong>Estatus:</strong>
{{ $permisoCat->Estatus == 1 ? 'Activo' : 'Inactivo' }}
</div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


