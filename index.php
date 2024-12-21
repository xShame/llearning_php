<?php

    // variable scope

    // local vars
    function myFunc(){
        $price = 10;
        echo $price;
    }

    function myFuncTwo($age){
        echo $age;
    }

    // myFuncTwo(25);
    // global scope


    $name = 'mario';

    // function sayHello(){
    //     global $name;
    //     echo "hello $name";
    // }

    // sayHello();


    function sayBye(&$name){
        $name = 'wario';
        echo "bye $name";
    }

    sayBye($name);
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