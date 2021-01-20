<?php
function myTest() {
  static $x = 0;
  echo $x." , ";
  $x++;
}

myTest();// output = 0  , x = 1

myTest();// output = 1  , x = 2

myTest();// output = 2  , x = 3


?>