<?php 
    $title = "While-Do-While Loop";
    include 'includes/header.php' 
?>
  <h1>While Loop</h1>
  <?php
     $grade = 0;
        //Infinite Loop
        // while($grade < 10){
        //     echo '<p> I am Less Then 10 Sorry!!</p>';
        // }
        // Pre-Condition Loop
        while($grade < 10){
            echo '<p>I Am Less Than 10 Sorry!!</p>';
            $grade++;
        }

        echo 'Exit Loop!!';
  ?>  
    
  <h1>
            <h1>Do-While Loop</h1>
            <?php
                //Post-Condition Loop
                $grade = 0;
                do{
                  echo '<p>I Am Do While Loop Yeah!!</p>';
                  $grade++;
                }while($grade < 10); 
                echo 'Exit Loop!!';
            ?>
  </h1>
  <?php require 'includes/footer.php' ?>