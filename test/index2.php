<?php
     
    include("configure/db_connect.php");
     $query = "select * from pizza_add";
     $result = mysqli_query($conn, $query);
     $output = mysqli_fetch_all($result, MYSQLI_ASSOC);
    //  print_r($output);
     mysqli_free_result($result);
     mysqli_close($conn);

?>



<!DOCTYPE html>
<html lang="en">

    <?php include("templates/header.php"); ?>
        <div class="parts">
            <?php foreach($output as $outputs){ ?>
                <div class="sub_parts">
                    <div class="pizza_title">
                        <?php echo htmlspecialchars($outputs["title"]) ?>
                    </div>
                    
                    <div>
                        <?php echo htmlspecialchars($outputs["email"]) ?>
                    </div>
                    
                    <div>
                        <ul>
                            <?php foreach(explode(",", $outputs["ingredients"]) as $ing){; ?>
                               <li><?php echo htmlspecialchars($ing) ?></li>
                            <?php }; ?>
                        </ul>
                    </div>

                </div>
            <?php } ?>
        </div>
    <?php include("templates/footer.php"); ?>
        
   
</html>