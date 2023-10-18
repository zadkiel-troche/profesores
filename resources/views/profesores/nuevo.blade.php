@extends('layouts.app')

@section('content')
    <h1>Nuevo Profesor</h1>
    <form action="{{ route('profesores.nuevo') }}" method="POST">
        @csrf
        <div class="form-group mb-2">
            <label for="nombre">Nombre:</label>
            <input type="text" class="form-control" name="nombre" id="nombre" required>
        </div>
        <div class="form-group mb-2">
            <label for="apellido">Apellido:</label>
            <input type="text" class="form-control" name="apellido" id="apellido" required>
        </div>
        <div class="form-group mb-2">
            <label for="ci">CI:</label>
            <input type="text" class="form-control" name="ci" id="ci" required>
        </div>
        <div class="form-group mb-2">
            <label for="gmail">Gmail:</label>
            <input type="email" class="form-control" name="email" id="email" required>
        </div>
        <div class="form-group mb-2">
            <label for="fecha_nacimiento">Fecha de Nacimiento:</label>
            <input type="date" class="form-control" name="fecha_nacimiento" id="fecha_nacimiento" required>
        </div>
        <div class="form-group mb-2">
            <label for="direccion">Dirección:</label>
            <input type="text" class="form-control" name="direccion" id="direccion" required>
        </div>
        <div class="form-group mb-2">
            <label for="profesion">Profesión:</label>
            <input type="text" class="form-control" name="profesion" id="profesion" required>
        </div>
        <div class="form-group mb-2">
            <label for="materia">Materia:</label>
            <select class="form-control" name="materia" id="materia" required>
                <option value="">Seleccione una materia</option>
                <option value="Diseño Gráfico">Diseño Gráfico</option>
                <option value="Diseño de Interiores">Diseño de Interiores</option>
                <option value="Diseño de Modas">Diseño de Modas</option>
                <option value="Diseño Industrial">Diseño Industrial</option>
            </select>
        </div>
        <div class='mt-4 row'>
            <div class='col-2'></div>
            <a href='/' class="btn btn-danger col-3">Cancelar</a>
            <div class='col-2'></div>
            <button type="submit" class="btn btn-primary col-3">Registrar</button>
            <div class='col-2'></div>
        </div>
    </form>
@endsection