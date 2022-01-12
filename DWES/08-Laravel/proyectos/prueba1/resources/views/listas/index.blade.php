<!DOCTYPE html>
<html lang="esp">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Maquinas creadas por {{ $autor }}</h1>
    <h2>Listado de las diferentes maquinas</h2>
    <ul>
        @foreach ($maquinas as $maquina)
            <li>
                {{ $maquina }}
                <ul>
                    @foreach ($versiones as $version)
                        <li>{{$version}}</li>
                    @endforeach
                </ul>
            </li>
        @endforeach
    </ul>
</body>
</html>