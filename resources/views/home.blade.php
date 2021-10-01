<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home
    </title>
</head>

<body>

    <header>
        @foreach($links as $link)
        <a href={{route($link)}}>{{ $link }}</a>
        @endforeach
    </header>

    <h1>Hello World</h1>
    @isset($name)
    <h2>my name is {{ $name }}</h2>
    @endisset

    @empty($name)
    
    <h2>I'm a Guest</h2>
        
    @endempty

    <h3>and my lastname id {{ $lastname }}</h3>

</body>

</html>