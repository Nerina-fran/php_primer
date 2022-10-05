
<?php
    $title = "Function";
    include 'includes/header.php' 
?>
    <h1>Functions</h1> 

    <?php

      /*Defining a Function */  

      function writeMessage(){
          echo "Yor are are very bright, talented and lovely person (-: <br/>";
      }

      /* Calling a Function */
      writeMessage(); 

      echo "<hr/>";

      writeMessage();

      /* Functions with parameters */

      function addFunction($num1, $num2){
          $sum = $num1 + $num2;
          $num2 = $num2 + 1;
          echo "The sum of $num1 and $num2 is: $sum <br/>";
      }

      function changeNum($num){
          $num = $num + 20;
          // $num+= 20;
      }

      function returnProduct($num1, $num2){
          $prod = $num1 * $num2;
          return $prod;
      }

      $num = 700;
      addFunction(15, 30);
      addFunction(10, $num);
      echo $num;
      addFunction(20, "80");

      changeNum ($num);
      echo $num . '<br/>';

      $return_value = returnProduct(15, 300);
      echo $return_value . ''




    ?>
<?php require 'includes/footer.php' ?>