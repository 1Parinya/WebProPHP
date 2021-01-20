<?php

$x = 100 ;
$y = 10 ;
$oparator = '+';

    function plus(){
    global $x ;
    global  $y ;
        
        echo " x + y = "; echo $x + $y ;
        echo "<br>";

    }

    function sub(){
    global $x ;
    global  $y ;
        echo " x - y = "; echo $x - $y ;
        echo "<br>";
    }

    function mul(){
    global $x ;
    global  $y ;
        echo " x * y = "; echo $x * $y ;
        echo "<br>";
    }

    function div(){
    global $x ;
    global  $y ;    
        echo " x / y = "; echo $x / $y ;
        echo "<br>";
    }
   
    switch ($oparator) {
        case "+":
            echo plus();
          break;
        case "-":
          echo sub();
          break;
        case "*":
          echo mul();;
          break;
        case "/":
            echo div();
            break;
      }

?>