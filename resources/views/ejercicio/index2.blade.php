<link rel="stylesheet" type="text/css" href="{{ asset('css/limite-texto.css') }}">
    <!-- Page header -->
    <div class="page-header d-print-none">
        <div class="container-xl">
            <div class="row g-2 align-items-center">
                <div class="col">
                    <!-- Page pre-title -->

                    <h2 class="page-title">
                        {{ __('Ejercicios') }}
                    </h2>
                </div>
                <!-- Page title actions -->
                <div class="col-12 col-md-auto ms-auto d-print-none">
                    
                </div>
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
                            <h3 class="card-title">Lista de ejercicios</h3>
                        </div>
                        <!--
                            <div class="card-body border-bottom py-3">
                                <div class="d-flex">
                                    <div class="text-muted">
                                        Mostrar
                                        <div class="mx-2 d-inline-block">
                                            <input type="text" class="form-control form-control-sm" value="10" size="3"
                                                aria-label="Invoices count">
                                        </div>
                                        registros
                                    </div>
                                    <div class="ms-auto text-muted">
                                        Buscar
                                        <div class="ms-2 d-inline-block">
                                            <input type="text" class="form-control form-control-sm"
                                                aria-label="Search invoice">
                                        </div>
                                    </div>
                                </div>
                            </div>
                         -->
                        <div class="table-responsive min-vh-100">
                            <table class="table card-table table-vcenter text-nowrap datatable">
                                <thead>
                                <tr>
                                    
                                    <th class="w-1">No.
                                        
                                    </th>
                                    
										<th>Nombre</th>
										<th>Descripción del ejercicio</th>
										<th>Estatus</th>

                                    <th class="w-1"></th>
                                </tr>
                                </thead>

                                <tbody>
                                @forelse ($ejercicios as $ejercicio)
                                    <tr>
                                        <td>{{ ++$j }}</td>
                                        
											<td class="limite-texto">{{ strlen($ejercicio->Nombre) > 15 ? substr($ejercicio->Nombre, 0, 15) . '...' : $ejercicio->Nombre }}</td>
											<td class="limite-texto">{{ strlen($ejercicio->Descripcion) > 15 ? substr($ejercicio->Descripcion, 0, 15) . '...' : $ejercicio->Nombre }}</td>
											<td class="limite-texto">{{ $ejercicio->Estatus == 1 ? 'Activo' : 'Inactivo' }}</td>

                                        
                                    </tr>
                                @empty
                                    <td>No hay ejercicios registrados</td>
                                @endforelse
                                </tbody>

                            </table>
                        </div>
                       <div class="card-footer d-flex align-items-center">
                            {!! $ejercicios->links('tablar::pagination') !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
