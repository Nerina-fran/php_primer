<?php 
    $title = "String Manipulation";
    include 'includes/header.php'
 ?>
    <h1>PHP String Manipulation</h1>
    <?php
    //Concatenation of String
         $phrase1 = "Students Who are Late Today";
         $phrase2 = "Are in the Principals Office";
         $name = "nerina francis";
         echo $phrase1 . ", named Shelly, and Tim ". $phrase2;
         echo '<br/>';

         //String Tranformation
         echo 'Uppercase First Letter: ' . ucfirst($name). '<br/>';
         echo 'Uppercase First Letter of each word: ' . ucwords($name). '<br/>';
         echo 'Upper case:'. strtoupper($name).'<br/>';
         echo 'Lower case:'. strtolower("THIS WAS ALL IN UPPER CASE").'<br/>';
         echo '<hr/>';
         echo 'Repeat String: ' . str_repeat('n',8) . '<br/>';
         echo 'Repeat String: ' . strtoupper(str_repeat('n',8)) . '<br/>';
         echo 'Get a Substring: ' . substr($name, 4, 7). '<br/>';

         echo 'Get position of string: ' . strpos($name, 'r').'<br/>';
         //Returns NULL
         //echo 'Get position of string: ' . strpos($combine, 'q').'<br/>';
         echo 'Find Character "R": ' . strchr($name, 'R').'<br/>';
         echo 'Find Character "f": ' . strchr($name, 'f').'<br/>';
         echo 'Find Character "c": ' . strchr($name, 'c').'<br/>';
         echo 'Find Character "i": ' . strchr($name, 'i').'<br/>';

         echo 'Find Length of a String: ' . strlen($name) .'<br/>';

         echo 'Without Trim: '. "A" . "B C D". "E" .'<br/>';
         echo 'Trim space on both sides: ' ."A" . trim(" B C D ") . "E"  .'<br/>';
         echo 'Trim Space to left: ' ."A" . ltrim(" B C D ") . "E" .'<br/>';
         echo 'Trim Space to right: ' ."A" . rtrim(" B C D ") . "E" .'<br/>';
         
         echo 'Replace string with another: ' . str_replace("Principal", "Voice-Principal", $phrase2 ) .'<br/>';
        
    ?>   
<?php require 'includes/footer.php' ?>