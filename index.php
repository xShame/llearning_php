<?php
 
    // include('ninjas.php');
    // require('ninjas.php');


    // connect to a database
    $conn = mysqli_connect('localhost', 'adminer', 'P@$$w0rd123', 'pizza');

    // check the connection
    if(!$conn){
        echo "Connection Error!: " . mysqli_connect_error();
    }

?>

<!DOCTYPE html>
<html lang="en">
    <?php include('templates/header.php'); ?>
  
    <?php include('templates/footer.php'); ?>
</html>