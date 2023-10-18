@extends('layouts.app')

@section('content')
    <h1>Modificar Profesor</h1>
    <form action="{{ route('profesores.modificar') }}" method="POST">
        @csrf
        <input type="hidden" class="form-control" name="id" id="id" value='{{$id}}' required>

        <div class="form-group mb-2">
            <label for="nombre">Nombre:</label>
            <input type="text" class="form-control" name="nombre" id="nombre" value='{{$profesor->nombre}}' required>
        </div>
        <div class="form-group mb-2">
            <label for="apellido">Apellido:</label>
            <input type="text" class="form-control" name="apellido" id="apellido" value='{{$profesor->apellidos}}' required>
        </div>
        <div class="form-group mb-2">
            <label for="ci">CI:</label>
            <input type="text" class="form-control" name="ci" id="ci" value='{{$profesor->ci}}' required>
        </div>
        <div class="form-group mb-2">
            <label for="gmail">Gmail:</label>
            <input type="email" class="form-control" name="email" id="email" value='{{$profesor->email}}' required>
        </div>
        <div class="form-group mb-2">
            <label for="fecha_nacimiento">Fecha de Nacimiento:</label>
            <input type="date" class="form-control" name="fecha_nacimiento" id="fecha_nacimiento" value='{{$profesor->fecha_nacimiento}}' required>
        </div>
        <div class="form-group mb-2">
            <label for="direccion">Dirección:</label>
            <input type="text" class="form-control" name="direccion" id="direccion" value='{{$profesor->direccion}}' required>
        </div>
        <div class="form-group mb-2">
            <label for="profesion">Profesión:</label>
            <input type="text" class="form-control" name="profesion" id="profesion" value='{{$profesor->profesion}}' required>
        </div>
        <div class="form-group mb-2">
            <label for="materia">Materia:</label>
            <select class="form-control" name="materia" id="materia" required>
                <option value="">Seleccione una materia</option>
                <option value="Diseño Gráfico" {{$profesor->materia == 'Diseño Gráfico' ? 'selected' : ''}}>Diseño Gráfico</option>
                <option value="Diseño de Interiores" {{$profesor->materia == 'Diseño de Interiores' ? 'selected' : ''}}>Diseño de Interiores</option>
                <option value="Diseño de Modas" {{$profesor->materia == 'Diseño de Modas' ? 'selected' : ''}}>Diseño de Modas</option>
                <option value="Diseño Industrial" {{$profesor->materia == 'Diseño Industrial' ? 'selected' : ''}}>Diseño Industrial</option>
                <option value="Disenio Web 3" {{$profesor->materia == 'Disenio Web 3' ? 'selected' : ''}}>Disenio Web 3</option>
            </select>
        </div>
        <div class='mt-4 row'>
            <div class='col-2'></div>
            <a href='/' class="btn btn-danger col-3">Cancelar</a>
            <div class='col-2'></div>
            <button type="submit" class="btn btn-primary col-3">Modificar</button>
            <div class='col-2'></div>
        </div>
    </form>
@endsection