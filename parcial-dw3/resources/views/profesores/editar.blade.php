<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Edición de Profesores</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>

<header class="p-4 fixed-top bg-light">
    <h2 class="text-center">Formulario de Edición de Profesores</h2>
</header>

<body>
    <div class="container p-4" style="margin-top: 100px;">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header text-center font-weight-bold">Edite los datos del profesor existente</div>

                    <div class="card-body">
                        <form method="post" action="{{route('actualizar',['id'=>$profesores->id])}}">
                            @csrf <!-- Campo CSRF -->
                            <!-- Nombre -->
                            <div class="form-group">
                                <label for="nombre">Nombre:</label>
                                <input type="text" name="nombre" id="nombre" class="form-control" value="{{$profesores->nombre}}" required>
                            </div>
                            <!-- Apellido -->
                            <div class="form-group">
                                <label for="apellido">Apellido:</label>
                                <input type="text" name="apellido" id="apellido" class="form-control" value="{{$profesores->apellido}}" required>
                            </div>
                            <!-- CI -->
                            <div class="form-group">
                                <label for="ci">CI:</label>
                                <input type="text" name="ci" id="ci" class="form-control" value="{{$profesores->ci}}" required>
                            </div>
                            <!-- Gmail -->
                            <div class="form-group">
                                <label for="gmail">Gmail:</label>
                                <input type="email" name="gmail" id="gmail" class="form-control" value="{{$profesores->gmail}}" required>
                            </div>
                            <!-- Fecha de Nacimiento -->
                            <div class="form-group">
                                <label for="fecha_nacimiento">Fecha de Nacimiento:</label>
                                <input type="date" name="fecha_nacimiento" id="fecha_nacimiento" class="form-control" value="{{$profesores->fecha_nacimiento}}" required>
                            </div>
                            <!-- Direccion -->
                            <div class="form-group">
                                <label for="direccion">Direccion:</label>
                                <input type="text" name="direccion" id="direccion" class="form-control" value="{{$profesores->direccion}}" required>
                            </div>
                            <!-- Profesion -->
                            <div class="form-group">
                                <label for="profesion">Profesion:</label>
                                <input type="text" name="profesion" id="profesion" class="form-control" value="{{$profesores->profesion}}" required>
                            </div>
                            <div class="form-group">
                                <label for="materia">Materia:</label>
                                <select name="materia" id="materia" class="form-control">
                                    <option value="matematicas" {{ $profesores->materia === 'matematicas' ? 'selected' : '' }}>Matematicas</option>
                                    <option value="ciencias" {{ $profesores->materia === 'ciencias' ? 'selected' : '' }}>Ciencias</option>
                                    <option value="quimica" {{ $profesores->materia === 'quimica' ? 'selected' : '' }}>Quimica</option>
                                    <option value="fisica" {{ $profesores->materia === 'fisica' ? 'selected' : '' }}>Fisica</option>
                                </select>
                            </div>

                            <div class="form-group text-center pt-4">
                                <button type="submit" class="btn btn-primary">Guardar</button>
                                <a href="{{url('profesores/index') }}" class="btn btn-danger">Cancelar</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>