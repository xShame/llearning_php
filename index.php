<?php
 
    // include('ninjas.php');
    // require('ninjas.php');


    // connect to a database
    $conn = mysqli_connect('localhost', 'adminer', 'P@$$w0rd123', 'pizza');

    // check the connection
    if(!$conn){
        echo "Connection Error!: " . mysqli_connect_error();
    }

    // write query for all pizzas
    $sql = 'SELECT title, ingredients, id FROM pizzas';

    // make query & get result
   $result = mysqli_query($conn, $sql);

    // fetch the resulting rows as an array
   $pizzas = mysqli_fetch_all($result, MYSQLI_ASSOC);

    //free the result from memory 
    mysqli_free_result($result);

    // close connection
    mysqli_close($conn);

    print_r($pizzas);

?>

<!DOCTYPE html>
<html lang="en">
    <?php include('templates/header.php'); ?>
  
    <?php include('templates/footer.php'); ?>
</html>