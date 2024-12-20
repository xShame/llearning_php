<?php

    // indexed arrays

    $peopleOne = ['shaun', 'crystal', 'ryu'];
    // echo $peopleOne[1];

    $peopleTwo = array('ken', 'chun-li');

    // echo $peopleTwo[1];

    $ages = [20, 30, 40, 50];
    // print_r($ages);

    $ages[1] = 25;

    // print_r($ages);

    $ages[] = 60;
    // print_r($ages);
    array_push($ages, 70);
    // print_r($ages);
    
    // echo count($ages);
    $peopleThree = array_merge($peopleOne,$peopleTwo);
    // print_r($peopleThree);

    // associative arrays (key & value pairs)
    $ninjasOne = ['shaun' => 'black', 'mario' => 'orange', 'luigi' => 'brown'];
    // echo $nijaOne['mario'];
    // print_r($nijaOne);

    $ninjasTwo = array('bowser' => 'green', 'peach' => 'yellow');
    // print_r($ninjasTwo);
    // $ninjasTwo['toad'] = 'pink';
    $ninjasTwo['peach'] = 'pink';
    // print_r($ninjasTwo);

    // echo count($nijaOne);

    $ninjasThree = array_merge($ninjasOne,$ninjasTwo);
    print_r($ninjasThree);
   
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