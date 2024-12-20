<?php

    // loops

    $ninjas = ['shaun', 'ryu', 'yoshi'];

    // for($i = 0; $i < count($ninjas); $i++){
    //     echo $ninjas[$i] . '<br />';
    // }

    // foreach($ninjas as $ninja){
    //     echo $ninja . '<br />';
    // }


    $products = [
		['name' => 'shiny star', 'price' => 20],
		['name' => 'green shell', 'price' => 10],
		['name' => 'red shell', 'price' => 15],
		['name' => 'gold coin', 'price' => 5],
		['name' => 'lightning bolt', 'price' => 40],
		['name' => 'banana skin', 'price' => 2]
	];

    // foreach($products as $product){
    //     echo $product['name'] . ' - ' . $product['price'];
    //     echo '<br / >';
    // }
    // $i = 0;
    // while ($i < count($products)) {
    //     # code...
    //     echo $products[$i]['name'];
    //     echo '<br />';
    //     $i++;
    // }


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
      
    <?php foreach($products as $product): ?>
        <div>
            <h3>
                <span style="font-weight: normal;">Product name: </span><?=$product['name']; ?>
            </h3>
            <p>
               Price: <strong>₱<?=$product['price']; ?>.00</strong>
            </p>
        </div>
    <?php endforeach; ?>
</body>
</html>