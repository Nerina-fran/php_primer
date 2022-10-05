<?php 
    $title = "Index";
    include 'includes/header.php'
?>

    <!-- Basic HTML -->
    <h1>Hello World Nerina is BACK (>: PHP Primer</h1>
    <br/>

    <?php
        //Printing to HTML using echo
        echo 'PHP here I come!!';
        echo '<br/>';
        echo 'I love IT and nursing so much';
        echo '<br/>';
        echo 'My girls are the world to me';
    ?>


    <?php
        // Variables need a '$'. They are not strongly typed
        $name = 'Nerina Francis';
        $age = 26;
        $address = '2341 Hillview Ave New York';
        // echo variable
        echo '<br/>';
        echo $name;
        echo '<h1>My Name is: '.$name.' </h1>';
        echo '<h1>My Age is: '.$age.' </h1>';
        echo '<h1>My Address is: '.$address.' </h1>';

        echo "<h1>My Name is: $name </h1>";

    ?>
    <button type="button" class="btn btn-dark">Click ME!!</button>
    <button type="button" class="btn btn-success">Success is KEY</button>
    <button type="button" class="btn btn-secondary">Secondary Key</button>
    <button type="button" class="btn btn-info">Information Key</button>
<?php require 'includes/footer.php' ?>
    

