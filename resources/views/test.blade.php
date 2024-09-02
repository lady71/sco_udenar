<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Testeando</title>
</head>
    <body>
        <h1>
        Hola mundo
        </h1> 

        <a href="{{ route ("crud")}}"> CRUD </a>
    </body>
</html>
<u> @endforeach
</u>

@for ($i = 1; $i < 9; $i++)
    <i> $data x {{$i}} = {{$data *$i}} </li>
@endfor