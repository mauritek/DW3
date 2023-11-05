<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de Profesores</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>

<header class="p-3 fixed-top bg-light">
    <div class="container">
        <h1 class="text-center">Listado de Profesores</h1>
        <div class="d-flex justify-content-between align-items-center mb-3">
            <a href="{{url('profesores/formulario') }}" class="btn btn-primary">Nuevo</a>
            <form action="{{ route('buscar') }}" method="GET" class="mb-12">
                <div class="input-group w-90">
                    <input type="text" name="buscar" class="form-control" placeholder="Buscar por CI" aria-label="Recipient's username" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                        <button class="btn btn-primary" type="submit">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                                <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                            </svg>
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</header>

<body>
    <div class="container p-4" style="margin-top: 150px;">
        @if (session('success'))
        <div class="alert alert-success">
            {{session('success')}}
        </div>

        @elseif (session('danger'))
        <div class="alert alert-danger">
            {{session('danger')}}
        </div>    
        @elseif (session('warning'))
        <div class="alert alert-warning">
            {{session('warning')}}
        </div>  
        @endif

        
        @if ($profesores->isEmpty())
        <div class="card">
            <div class="card-body">
                <p class="card-text text-center">No se encontraron resultados para la búsqueda.</p>
            </div>
        </div>
        @else
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>CI</th>
                    <th>Gmail</th>
                    <th>Fecha de Nacimiento</th>
                    <th>Direccion</th>
                    <th>Profesion</th>
                    <th>Materia</th>
                    <th>Accion</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($profesores as $profesor)
                <tr>
                    <td>{{ $profesor->id ?? 'NN'}}</td>
                    <td>{{ $profesor->nombre ?? 'NN' }}</td>
                    <td>{{ $profesor->apellido ?? 'NN' }}</td>
                    <td>{{ $profesor->ci ?? 'NN'}}</td>
                    <td>{{ $profesor->gmail ?? 'NN'}}</td>
                    <td>{{ $profesor->fecha_nacimiento ?? 'NN'}}</td>
                    <td>{{ $profesor->direccion ?? 'NN'}}</td>
                    <td>{{ $profesor->profesion ?? 'NN'}}</td>
                    <td>
                        @if ($profesor->materia == 'matematicas')
                        <span class="badge badge-primary">{{$profesor->materia}}</span>
                        @elseif ($profesor->materia == 'ciencias')
                        <span class="badge badge-secondary">{{$profesor->materia}}</span>
                        @elseif ($profesor->materia == 'fisica')
                        <span class="badge badge-danger">{{$profesor->materia}}</span>
                        @else
                        <span class="badge badge-warning">{{$profesor->materia}}</span>
                        @endif
                    </td>
                    <td>
                        <a href="{{ route('eliminar', ['id' => $profesor->id]) }}" onclick="return confirm('¿Estás seguro de que deseas eliminar a este profesor?');" class="btn btn-danger">
                            Eliminar
                        </a>
                        <a href="{{ route('editar', ['id' => $profesor->id]) }}" class="btn btn-warning">
                            Editar
                        </a>
                        <a href="{{ route('ver', ['id' => $profesor->id]) }}" class="btn btn-info">
                            Ver
                        </a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <div>
            {{ $profesores->links() }}
        </div>
    </div>
    @endif
</body>

</html>