<?php 
    $title = "For Loops";
    include 'includes/header.php' 
?>
<h1>For Loops</h1>
    <?php 
        // For Loops
        for($count = 0; $count < 05; $count++){
            echo '<p> Hello World Im Here</p>';
        }

        for($count = 0; $count < 10; $count++){
            echo "<p>The Count is: $count</p>";
        } 
        
        for($count = 0; $count < 8; $count++){
            echo "<p>The number of students are: $count</p>"; 
        }    
    ?>
<?php require 'includes/footer.php' ?>