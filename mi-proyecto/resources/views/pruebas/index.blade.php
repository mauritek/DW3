<html>
<head>
    <title>Pruebas</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
</head>
<body>
    <h1 class='text-center'>Pruebas</h1>

    <div class='container-fluid'>
        <div class="card">
            <div class="card-body">
                Generos:
                <span class="badge badge-primary">{{$masculino}}</span>
                <span class="badge badge-danger">{{$femenino}}</span>
                <span class="badge badge-success">{{$otros}}</span>
            </div>
        </div>
        <div class="card">
            <div class="card-body">
                Detalles.
                @if($edad>=18)
                    <span class="badge badge-danger">Eres mayor</span>
                @elseif($edad===17)
                    <span class="badge badge-success">Te falta un año</span>
                @elseif(empty($edad))
                    <span class="badge badge-secondary">Esta vacio</span>
                @else
                    <span class="badge badge-warning">Eres menor</span>
                @endif
            </div>
        </div>
    </div>
</html>