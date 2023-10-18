@extends('layouts.app')

@section('content')
    <div class="container">
        <div class='row mb-4'>
            <div class='col-8'>
                <h1>Lista de profesores</h1>
            </div>
            <div class='col-4'>
                <a href='/profesores/nuevo' class='btn btn-primary'>Cargar Profesor</a>
            </div>
        </div>

        <div class="mensaje">
            @if(session('mensaje'))
                <div class="alert alert-success">
                    {{ session('mensaje') }}
                </div>
            @endif
        </div>

        <table class="table table-dark table-striped">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">CI</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Apellido</th>
                    <th scope="col">Email</th>
                    <th scope="col">Fec. Nacimiento</th>
                    <th scope="col">Direccion</th>
                    <th scope="col">Profesion</th>
                    <th scope="col">Materia</th>
                    <th scope="col">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @unless(empty($profesores))
                    @foreach ($profesores as $profesor)
                        <tr>
                            <td scope="row">{{ $profesor->id }}</td>
                            <td>{{ $profesor->ci }}</td>
                            <td>{{ $profesor->nombre }}</td>
                            <td>{{ $profesor->apellido }}</td>
                            <td>{{ $profesor->email }}</td>
                            <td>{{ $profesor->fecha_nacimiento }}</td>
                            <td>{{ $profesor->direccion }}</td>
                            <td>{{ $profesor->profesion }}</td>
                            <td>{{ $profesor->materia }}</td>
                            <td>
                                <a href='/profesores/{{ $profesor->id }}/editar' class='btn btn-warning mb-2'>Editar</a>
                                <a href='/profesores/{{ $profesor->id }}/eliminar' class='btn btn-danger mb-2'>Eliminar</a>
                            </td>
                        </tr>
                    @endforeach
                @else
                    <tr>
                        <td colspan="10" class='text-center'>No hay profesores registrados</td>
                    </tr>
                @endunless
            </tbody>
        </table>
    </div>


    {{ $profesores->links() }}

    @unless(session('mensaje'))
        <script>
            Swal.fire(
                position: 'top-end',
                icon: 'success',
                title: '{{session("mensaje")}}',
                showConfirmButton: false,
                timer: 1500
            )
        </script>
    @endunless

@endsection