<?php
    //constant variable
    define('NAME', 'Yoshi');


    // $name = 'Yoshi';
    $age = 19;
    // $name = 'Toad';
    // echo $name;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
        <h1>User Profile Page</h1>

        <div>
            <?=NAME;?>
        </div>
        <div>
            <?=$age;?>
        </div>
</body>
</html>