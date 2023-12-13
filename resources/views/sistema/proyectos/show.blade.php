@extends('home')
@extends('adminlte::page')

@section('content')

@section('css')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.5.0/css/responsive.bootstrap4.min.css">
<link rel="stylesheet" href="">
@endsection

@can('Ver Actividades')
<div class="row">
    <div class="col-md-1"></div>
    <div class="col-md-10">
        <br><br>
        @if(session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
        @endif
        <h3>Planes de Trabajo - {{$proyectos->Nombre}}</h3>
        <br>
        <a href="{{ route('proyectos.index', ['id' => $proyectos->idProyecto]) }}" class="btn btn-outline-primary">Regresar</a>
        <br>
        <br>
        @can('Crear Actividades')
        <button type="button" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
            Registrar Actividad
        </button> &nbsp; <a href="{{ route('manual.pdt') }}">Ir al Manual de Usuario</a>
        @endcan
        @can('Ver Carpetas')
        <a class="btn btn-success float-right" href="{{ route('proyectos.evidencia.show', $proyectos->idProyecto) }}">Subir evidencias</a>
        @endcan

        <div class="table-responsive">
            <br>
            <style>
                #PDT thead th {
                    background-color: #007bff;
                    color: white;
                }
            </style>
            <table class="table table-bordered" id="PDT">
                <thead class="bg-primary text-white">
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Asesor a Cargo</th>
                        <th scope="col">Nombre Actividad</th>
                        <th scope="col">Fecha de Inicio</th>
                        <th scope="col">Fecha de Finalización</th>
                        <th scope="col">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($plandework as $pdt)
                    <tr class="">
                        <td scope="row"> {{$pdt->id_pdt}} </td>
                        <td> {{$pdt->asesore->nombre_asesor}} </td>
                        <td> {{$pdt->nombre_actividad}} </td>
                        <td> {{$pdt->fecha_inicio}} </td>
                        <td> {{$pdt->fecha_fin}} </td>
                        <td>
                            @can('Editar Actividades')
                            <button type="button" class="btn btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#edit{{$pdt->id_pdt}}">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                    <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                                    <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
                                </svg>
                            </button>
                            @endcan
                            @can('Eliminar Actividades')
                            <button type="button" class="btn btn-outline-danger" data-pdt-id="{{ $pdt->id_pdt }}" onclick="eliminarPDT(this)">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                    <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6Z" />
                                    <path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1ZM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118ZM2.5 3h11V2h-11v1Z" />
                                </svg>
                            </button>
                            @endcan
                            @can('Aprobar Actividades')
                            
                            @if($pdt->estado == 'En ejecución')
                            <button type="button" class="btn btn-warning" onclick="validarActividad('{{ $pdt->id_pdt }}')">
                                En ejecución
                            </button>
                            @else
                            <button type="button" class="btn btn-success" disabled>
                                Terminado
                            </button>
                            @endif
                            @endcan

                        </td>

                    </tr>
                    @include('sistema.plandework.info')
                    @endforeach
                </tbody>
            </table>
        </div>
        @include('sistema.plandework.create')
    </div>
    <div class="col-md-1"></div>
</div>
@endcan

@endsection

@section('js')
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.7/js/dataTables.bootstrap4.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.5.0/js/dataTables.responsive.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.5.0/js/responsive.bootstrap4.min.js"></script>
<script src="https://cdn.datatables.net/plug-ins/1.10.20/i18n/Spanish.json"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>

<script>
    function validarActividad(id_pdt) {
        // Realiza una solicitud AJAX para verificar si hay archivos asociados a la actividad
        var xhr = new XMLHttpRequest();
        xhr.open('GET', `/verificar-archivos/${id_pdt}`, true); // Ajusta la ruta según tu configuración
        xhr.onreadystatechange = function() {
            if (xhr.readyState == 4) {
                if (xhr.status === 200) {
                    var response = JSON.parse(xhr.responseText);

                    if (response.tieneArchivos) {
                        // Si hay archivos, realiza la acción que necesitas (por ejemplo, cambiar el estado)
                        cambiarEstado(id_pdt);
                    } else {
                        // Si no hay archivos, muestra un mensaje de error
                        Swal.fire('Error', 'No se ha subido ningún archivo para esta actividad', 'error');
                    }
                } else {
                    console.error('Error en la solicitud AJAX:', xhr.statusText);
                    Swal.fire('Error', 'No se puede verificar la actividad', 'error');
                }
            }
        };
        xhr.send();
    }

    function cambiarEstado(id_pdt) {
        Swal.fire({
            title: '¿Estás seguro?',
            text: '¡La actividad se marcará como terminada!',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Sí, marcar como terminada'
        }).then((result) => {
            if (result.isConfirmed) {
                // Realiza una solicitud AJAX para cambiar el estado de la actividad
                var xhr = new XMLHttpRequest();
                xhr.open('POST', `/plandetrabajo/cambiarEstado/${id_pdt}`, true); // Ajusta la ruta según tu configuración
                xhr.setRequestHeader('X-CSRF-TOKEN', '{{ csrf_token() }}'); // Asegúrate de incluir el token CSRF
                xhr.onreadystatechange = function() {
                    if (xhr.readyState == 4) {
                        console.log('HTTP status:', xhr.status);

                        if (xhr.status === 200) {
                            var response = JSON.parse(xhr.responseText);
                            console.log('Respuesta del servidor:', response);
                            Swal.fire('¡Terminado!', response.message, 'success');

                            // Recarga la página después de cambiar el estado de la actividad
                            location.reload();
                        } else {
                            console.error('Error en la solicitud AJAX:', xhr.statusText);
                            Swal.fire('Error', 'No se puede cambiar el estado de esta actividad', 'error');
                        }
                    }
                };
                xhr.send();
            }
        });
    }

    $(document).ready(function() {
        $('#PDT').DataTable({
            responsive: true,
            autoWidth: false,
            language: {
                url: 'https://cdn.datatables.net/plug-ins/1.10.20/i18n/Spanish.json'
            }
        });
    });

    function eliminarPDT(btn) {
        const pdtId = btn.getAttribute('data-pdt-id');

        Swal.fire({
            title: '¿Estás seguro?',
            text: '¡No podrás revertir esto!',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#d33',
            cancelButtonColor: '#3085d6',
            confirmButtonText: 'Sí, eliminarlo'
        }).then((result) => {
            if (result.isConfirmed) {
                // Realiza una solicitud AJAX para eliminar el PDT
                var xhr = new XMLHttpRequest();
                xhr.open('DELETE', `/plandetrabajo/${pdtId}`, true); // Ajusta la ruta según tu configuración
                xhr.setRequestHeader('X-CSRF-TOKEN', '{{ csrf_token() }}'); // Asegúrate de incluir el token CSRF
                xhr.onreadystatechange = function() {
                    if (xhr.readyState == 4) {
                        console.log('HTTP status:', xhr.status);

                        if (xhr.status === 200) {
                            var response = JSON.parse(xhr.responseText);
                            console.log('Respuesta del servidor:', response);
                            Swal.fire('¡Eliminado!', response.message, 'success');

                            // Recarga la página después de eliminar el PDT
                            location.reload();
                        } else {
                            console.error('Error en la solicitud AJAX:', xhr.statusText);
                            Swal.fire('Error', 'No se puede eliminar esta actividad', 'error');
                        }
                    }
                };
                xhr.send();
            }
        });
    }
</script>
@endsection
