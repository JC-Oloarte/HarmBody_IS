@extends('tablar::page')

@section('title', 'Create Paciente')

@section('content')
    <!-- Page header -->
    <div class="page-header d-print-none">
        <div class="container-xl">
            <div class="row g-2 align-items-center">
                <div class="col">
                    <h2 class="page-title">
                        {{ __('Ingresar nuevo paciente') }}
                    </h2>
                </div>
                <!-- Page title actions -->
                
            </div>
        </div>
    </div>
    <!-- Page body -->
    <div class="page-body">
        <div class="container-xl">
            @if(config('tablar','display_alert'))
                @include('tablar::common.alert')
            @endif
            <div class="row row-deck row-cards">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Información del paciente</h3>
                        </div>
                        <div class="card-body">
                            <form method="POST" action="{{ route('pacientes.store') }}" id="ajaxForm" role="form"
                                  enctype="multipart/form-data">
                                @csrf
                                @include('paciente.form')
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

