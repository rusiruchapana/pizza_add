<?php
    
    include("configure/db_connect.php");
    $email =$pizza_title= $ingredients  = "";
    $errors = array("email"=>"", "title"=>"", "ingredients"=>"");

    if(isset($_POST["submit"])){

        //validate email field
        if(empty($_POST["email"])){
            $errors["email"]= "Please enter a Email address" ."<br>";
        }else{

            $email = $_POST["email"];
            if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
                $errors["email"]= "Enter a valid Email" ."<br>";
            }
            
        } 

        //validate pizza title field
        if(empty($_POST["pizza_title"])){
            $errors["title"]= "Please enter a Pizza Title" ."<br>";
        }else{
            $pizza_title = $_POST["pizza_title"];
        }

        //validate ingredients field
        if(empty($_POST["ingredients"])){
           $errors["ingredients"]=  "Please enter Ingredients" ."<br>";
        }else{
            $ingredients = $_POST["ingredients"];
        }



        
        if(array_filter($errors)){
            echo "There are errors in the form";
        }else{
            $email = mysqli_real_escape_string($conn, $_POST["email"]);
            $title = mysqli_real_escape_string($conn, $_POST["pizza_title"]);
            $ingredients = mysqli_real_escape_string($conn, $_POST["ingredients"]);
            //header("Location: index2.php");
            //$sql = "insert into pizza_add (email, title, ingredients) values("$email","$title","$ingredients")";
            $sql = "INSERT INTO pizza_add (email, title, ingredients) VALUES ('$email', '$title', '$ingredients')";
    
            if(mysqli_query($conn, $sql)){
                //header("Location: index2.php");
            }else{
                echo "Correctly not add inputs data" . mysqli_error($conn);
            }
        }
    }

    
?>


<!DOCTYPE html>
<html lang="en">

    <?php include("templates/header.php"); ?>
        <section class="contain">
           
            <form action="index.php" method="POST">
                <div class="form_topic">Add a Pizza</div><br>

                <label for="email">Your Email</label>
                <input type="text" name="email" class="email_value" value="<?php echo $email ?>"><br><br>
                <div class="email_error"><?php echo $errors["email"] ?></div>

                <label for="pizza_title">Pizza Title</label>
                <input type="text" name="pizza_title" value="<?php echo  $pizza_title ?>"><br><br>
                <div class="title_error"><?php echo $errors["title"] ?></div>

                

                <label for="ingredients">Ingredients</label>
                <input type="text" name="ingredients" value="<?php  echo $ingredients ?>">
                <div class="ingredients_error"><?php echo $errors["ingredients"]?></div><br>

                <input type="submit" name="submit" value="Submit">

            </form>
        </section>

    <?php include("templates/footer.php"); ?>
        
   
</html>