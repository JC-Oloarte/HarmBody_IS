@extends('tablar::page')

@section('title', 'View Rol Cat')

@section('content')
    <!-- Page header -->
    <div class="page-header d-print-none">
        <div class="container-xl">
            <div class="row g-2 align-items-center">
                <div class="col">
                    <!-- Page pre-title -->
                    <h2 class="page-title">
                        {{ __('Rol') }}
                    </h2>
                </div>
                <!-- Page title actions -->
                <div class="col-12 col-md-auto ms-auto d-print-none">
                    <div class="btn-list">
                        <a href="{{ route('rol-cats.index') }}" class="btn btn-primary d-none d-sm-inline-block">
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
                            <h3 class="card-title">Detalles del rol</h3>
                        </div>
                        <div class="card-body">
                            

<div class="form-group">
<strong>Nombre:</strong>
{{ $rolCat->Nombre }}
</div>
<div class="form-group">
<strong>Fecha De Alta:</strong>
{{ $rolCat->Fecha_de_alta }}
</div>
<div class="form-group">
<strong>Estatus:</strong>
{{ $rolCat->Estatus == 1 ? 'Activo' : 'Inactivo' }}
</div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


