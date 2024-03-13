<?php 
    $posts = ['title'=>1,'content'=> 2, 'title'=>13,'content'=> 4];
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IgorFy</title>
</head>
<body>
    <nav>
        <ul>
            <li><a href="main"><img src="" alt=""></a></li>
            <li><a href="addMusic">Add new music</a></li>
        </ul>
    </nav>
    <div class="list">
        <ul>
            @foreach($posts as $el)
            <div>
                <a href=""><img src="D:/Igor/result.png" alt="awd"></a>
                <h4>title</h4>
            </div>
            @endforeach
        </ul>
    </div>
    <footer>IgoreFy 2024. All rights reserverd.</footer>
</body>
</html>