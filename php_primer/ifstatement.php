<?php 
    $title = "If Statement";
    include 'includes/header.php' 
?>
    <h3 style="color: red"></h3>
    <?php

        //An If statement that will carry out an action based on the value of the variable.

        echo '<h2>If Statement</h2>';

        $grade = 70;
        // ==, >, <, <=, >=, ===
        if($grade >= 60){
            echo '<h3 style="color: green">You Have Passed</h3>';
        }
        else{
            echo '<h3 style="color: red">You Have Failed</h3>';
        }
        $grade = 'B';
        //If-Else If-Else
        if($grade == 'A'){
            echo '<h2 style="color: green">You are a SuperStar!!</h2>';
        }
        elseif ($grade == 'B'){
            echo '<h2 style="color: blue">You Did Great!!</h2>';
        }
        else{
            echo '<h2 style="color: red">Sorry Try Again You Have Failed!!...</h2>';
        }
    ?>

<?php require 'includes/footer.php' ?>