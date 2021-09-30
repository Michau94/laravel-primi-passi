<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Info</title>
</head>

<body>
    <header>
        @foreach($links as $link)
        <a href={{route($link)}}>{{ $link }}</a>
        @endforeach
    </header>

    <h1>Info Page</h1>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae, consequatur suscipit delectus nobis quia dolorem exercitationem nihil neque cupiditate enim illo sint facilis sed magnam labore nostrum explicabo. Ad minima illum ea possimus, numquam explicabo fuga non! Quo natus quisquam laudantium, quas, qui, distinctio consequatur mollitia perferendis porro ea dolore.</p>

</body>

</html>