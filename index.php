<?php

    $blogs = [
        ['title' => 'mario party', 'author' => 'mario', 'content' => 'lorem', 'likes' => 30],
        ['title' => 'mario kart cheats', 'author' => 'toad', 'content' => 'lorem', 'likes' => 25],
        ['title' => 'zelda hidden cheats', 'author' => 'link', 'content' => 'lorem', 'likes' => 50]
    ];

    // print_r($blogs[1]['author']);
    // echo count($blogs);

    // $blogs[] = ['title' => 'castle party', 'author' => 'peach', 'content' => 'lorem', 'likes' => 100 ];
    array_push($blogs, ['title' => 'castle party', 'author' => 'peach', 'content' => 'lorem', 'likes' => 100]);

    $popped = array_pop($blogs);
    print_r($popped);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
      
</body>
</html>