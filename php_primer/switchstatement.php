<?php 
    $title = "Switch Statements";
    include 'includes/header.php' 
?>
    <h1>Switch Statements</h1>
    <?php 
    // Switch Statement
        $grade = 'D';

        switch($grade){
            case 'A';
                echo '<h2 style="color: green">You are a superstar!!</h2>';
                break;
            case 'B';
                echo '<h2 style="color: blue">You did great!!</h2>';  
                break;
            case 'C';
                echo '<h2 style="color: green">You tried!!</h2>';  
            default: 
                echo '<h2 style="color: red">Sorry You have failed!!</h2>';  
                break;       
        }
    ?>
<?php require 'includes/footer.php' ?>