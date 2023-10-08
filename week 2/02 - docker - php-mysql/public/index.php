<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/style.css">
    <title>music library</title>
</head>
<body>
    <nav class="nav">
        <input type="text">
        <ul class="list">
            <li class="listItem"> <a href="#singles">singles</a> </li>
            <li class="listItem"> <a href="#artiest">artiest</a> </li>
            <li class="listItem"> <a href="#top 100">top 100</a> </li>
        </ul>
    </nav>

    <?php
        for($i=0; $i<10; $i++){
            include('../card.php');
        }
    ?> 
    <main>
        <article>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde repudiandae accusamus ducimus porro repellat aut quod aperiam, consectetur nobis qui, officiis, iste animi soluta minus ex voluptas odio cum? Adipisci.</p>
        </article>
    </main>
    
</body>
</html>