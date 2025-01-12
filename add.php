<?php
 
    // include('ninjas.php');
    // require('ninjas.php');

    // if(isset($_GET['submit'])){
    //     echo $_GET['email'];
    //     echo $_GET['title'];
    //     echo $_GET['ingredients'];
    // }
    if(isset($_POST['submit'])){
        // echo htmlspecialchars($_POST['email']);
        // echo htmlspecialchars($_POST['title']);
        // echo htmlspecialchars($_POST['ingredients']);

        if(empty($_POST['email'])){
            echo "An email is required <br />";
        } else{
            // echo htmlspecialchars($_POST['email']);
            $email = $_POST['email'];

            if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
                echo 'Email must be a valid email address <br />';
            } 
        }
        if(empty($_POST['title'])){
            echo "A title is required <br />";
        } else{
            // echo htmlspecialchars($_POST['title']);
            $title = $_POST['title'];
            if(!preg_match('/^[a-zA-Z\s]+$/', $title)){
				echo 'Title must be letters and spaces only <br />';
			}
        }

        if(empty($_POST['ingredients'])){
            echo "At least one ingredient is required <br />";
        } else{
            // echo htmlspecialchars($_POST['ingredients']);
            $ingredients = $_POST['ingredients'];
			if(!preg_match('/^([a-zA-Z\s]+)(,\s*[a-zA-Z\s]*)*$/', $ingredients)){
				echo 'Ingredients must be a comma separated list';
			}
        }
    }

?>

<!DOCTYPE html>
<html lang="en">
    <?php include('templates/header.php'); ?>

    <section class="container grey-text">
        <h4 class="center">Add a Pizza</h4>
        <!-- <form action="add.php" method="GET" class="white"> -->
        <form action="add.php" method="POST" class="white">
            <label for="">Your Email:</label>
            <input type="text" name="email">
            <label for="">Pizza Title:</label>
            <input type="text" name="title">
            <label for="">Ingredients (comma seperated):</label>
            <input type="text" name="ingredients">

            <div class="center">
                <input type="submit" name="submit" value="submit" class="btn brand z-depth-0">
            </div>
        </form>
    </section>
  
    <?php include('templates/footer.php'); ?>
</html>