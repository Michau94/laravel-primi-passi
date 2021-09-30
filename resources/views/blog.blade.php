<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog
    </title>
</head>

<body>
    <header>
        @foreach($links as $link)
        <a href={{route($link)}}>{{ $link }}</a>
        @endforeach
    </header>



    <article>
        <h1>Blog Post</h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam amet minima culpa, autem nesciunt temporibus facere! Iste, aliquam at adipisci quis ducimus dicta repellat saepe illum eius beatae molestiae dignissimos unde esse consequuntur? Placeat, officia quisquam, atque ullam non repudiandae velit ipsa rerum necessitatibus modi possimus, numquam nesciunt natus asperiores soluta vel obcaecati harum optio dolorem. Velit dignissimos eius, adipisci recusandae autem, qui et mollitia odit iure quaerat pariatur earum aperiam, impedit optio illum commodi quasi deserunt est fugit rem ex esse dolore eos! Voluptatum, maiores commodi fugiat porro natus esse rem praesentium veniam quidem unde sequi dolores minus nostrum. Fugiat harum doloremque nisi libero, corrupti eligendi voluptates, tempora fuga quisquam iusto similique minima odit temporibus consequatur veniam sapiente esse repudiandae ab rerum! Fuga at laudantium inventore voluptas aliquid quia ratione harum accusamus temporibus non reiciendis quisquam explicabo, quod cum! Ab minima voluptate facilis possimus? Praesentium incidunt deserunt rerum repudiandae ducimus vitae voluptatum corrupti obcaecati commodi laboriosam, est quidem molestiae repellat veniam dicta sint, reprehenderit neque alias nostrum non beatae perspiciatis sapiente facere illo? Commodi pariatur nemo soluta rem harum consequuntur perferendis, omnis ut at earum ipsum facere, asperiores obcaecati molestiae reprehenderit tempore veritatis, dolore quae quis. Voluptate, deleniti excepturi.</p>


    </article>

</body>

</html>