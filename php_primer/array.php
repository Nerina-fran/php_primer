<?php 
    $title = "Array and Printouts";
    include 'includes/header.php' 
?>
     <h1><?php echo $title ?></h1>
    <?php
        //a Variable
        $num = 3;

        //An Array
        //Only one datatype
        $numbers = array(1,2,3,4,5,6,7,8,9,10,12,13,25,78,90,100,);
        //You can access the value in a subscript of the array using the index.
        echo $numbers[5];

        echo "<p>$numbers[8]</p>";

        $size = count($numbers);
        echo "<p>Array Numbers in size: $size</p>";

        for($count = 0; $count <$size; $count++){
            echo "<p>$numbers[$count]</p>";
        }



    ?>
<?php require 'includes/footer.php' ?>