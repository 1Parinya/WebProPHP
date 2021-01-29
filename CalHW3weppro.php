<?php
error_reporting( error_reporting() & ~E_NOTICE );
        $final = $_GET['final'];
        $midterm = $_GET['mid'];
        $assign = $_GET['asg'];
        $homework = $_GET['hw'];;
        $total = $final + $midterm + $assign + $homework ;
        echo ("<br>");
        echo ("<h2>FINAL  : ".$final."</h2>");
        echo ("<h2>MIDTERM  : ".$midterm."</h2>");
        echo ("<h2>ASSIGNMENTL  : ".$assign."</h2>");
        echo ("<h2>HOMEWORK  : ".$homework."</h2>");
        echo ("<h2>Total Score : ".($total."</h2>"));

        //คำนวณเกรด
        if($total <= 49){
            echo"<h2>YOUR GRADE IS : ".("F</h2>");
        }
        else if($total <= 54){
            echo"<h2>YOUR GRADE IS : ".("D</h2>");
        }
        else if($total <= 59){
            echo"<h2>YOUR GRADE IS : ".("D+</h2>");
        }
        else if($total <= 64){
            echo"<h2>YOUR GRADE IS : ".("C</h2>");
        }
        else if($total <= 69){
            echo"<h2>YOUR GRADE IS : ".("C+</h2>");
        }
        else if($total <= 74){
            echo"<h2>YOUR GRADE IS : ".("B</h2>");
        }
        else if($total <= 79){
            echo"<h2>YOUR GRADE IS : ".("B+</h2>");
        }
        else if($total <=100 ){
            echo"<h2>YOUR GRADE IS : ".("A</h2>");
        }
        else if($total >100 ){
            echo"<h2>YOUR GRADE IS : ".("SSS+ เก่งเกิ๊น</h2>");
        }
       
  
            
?>