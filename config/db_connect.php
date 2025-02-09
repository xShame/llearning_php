<?php
 // connect to a database
 $conn = mysqli_connect('localhost', 'adminer', 'P@$$w0rd123', 'pizza');

 // check the connection
 if(!$conn){
     echo "Connection Error!: " . mysqli_connect_error();
 }
?>