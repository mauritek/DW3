<html>
<head>
    <title>Clientes</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
</head>
<body>
    <h1 class='text-center'>Lista de clientes</h1>
    <div class='container-fluid'>
        <div class="card">
            <ul>
                @foreach($clientes as $client)
                    <li>{{ $client->id }}</li>
                    <li>{{ $client->nombre }}</li>
                    <li>{{ $client->apellido }}</li>
                    <li>{{ $client->created_at }}</li>
                    <hr/>
                @endforeach
            </ul>
        </div>
    </div>
</html>