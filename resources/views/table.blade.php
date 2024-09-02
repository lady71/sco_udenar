<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>tabla de multiplicar</title>
</head>
<body>
    <h1>
        table
    </h1>
    
    
    
    @for ($i = 1; $i < 9; $i++)
        <li> {{$num}} x {{$i}} = {{$num * $i}} </li>
    @endfor
    
</body>
</html>