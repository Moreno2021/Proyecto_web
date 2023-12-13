@extends('home')
@extends('adminlte::page')

@section('content')

<div class="row">
    <div class="col-md-1"></div>
    <div class="col-md-10">

        @if(session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif      
        <form method="POST" action="{{ route('create-all-permisos') }}">
            @csrf
            <button type="submit" class="btn btn-outline-primary">Crear todos los permisos</button> &nbsp; <a href="{{ route('manual.permisos') }}">Ir al Manual de Usuario</a>

        </form>
        <br>

        <div class="table-responsive">
            <br>
            <style>
                #Permisos thead th {
                    background-color: #007bff;
                    color: white;
                }
            </style>

            <table class="table table-bordered" id="Clientes">
                <thead class="bg-primary text-white">
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Nombre</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($permisos as $permiso)
                    <tr class="">
                        <td> {{$permiso->id}} </td>
                        <td> {{$permiso->name}} </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <div class="col-md-1"></div>
</div>
@endsection