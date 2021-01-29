<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
    div {text-align: center;}
    </style>
    <title>CAL GPA</title>
</head>
        <body>
            <div>
                <?php
                    error_reporting( error_reporting() & ~E_NOTICE );
                        $subject1 = $_GET['sub1'];
                        $credit1 = $_GET['n1'];
                        $grade1 = $_GET['g1'];

                        $subject2 = $_GET['sub2'];
                        $credit2 = $_GET['n2'];
                        $grade2 = $_GET['g2'];

                        $subject3 = $_GET['sub3'];
                        $credit3 = $_GET['n3'];
                        $grade3 = $_GET['g3'];

                        $subject4 = $_GET['sub4'];
                        $credit4 = $_GET['n4'];
                        $grade4 = $_GET['g4'];

                        $subject5 = $_GET['sub5'];
                        $credit5 = $_GET['n5'];
                        $grade5 = $_GET['g5'];

                        $total =  (($credit1 +  $credit2 +  $credit3 +  $credit4 + $credit5) / 5);

                        //วิชาที่1
                        echo ("<h3>SUBJECT : 1 : ".$subject1."</h3>");
                        echo ("<h3>CREDIT  : ".$credit1."</h3>");
                        echo ("<h3>GRADE  : ".$grade1."</h3>");
                    
                        //วิชาที่2
                        echo ("<h3>SUBJECT : 2 : ".$subject2."</h3>");
                        echo ("<h3>CREDIT  : ".$credit2."</h3>");
                        echo ("<h3>GRADE  : ".$grade2."</h3>");

                        //วิชาที่3
                        echo ("<h3>SUBJECT : 3 : ".$subject3."</h3>");
                        echo ("<h3>CREDIT  : ".$credit3."</h3>");
                        echo ("<h3>GRADE  : ".$grade3."</h3>");

                        //วิชาที่4
                        echo ("<h3>SUBJECT : 4 : ".$subject4."</h3>");
                        echo ("<h3>CREDIT  : ".$credit4."</h3>");
                        echo ("<h3>GRADE  : ".$grade4."</h3>");      

                        //วิชาที่5
                        echo ("<h3>SUBJECT : 3 : ".$subject3."</h3>");
                        echo ("<h3>CREDIT  : ".$credit3."</h3>");
                        echo ("<h3>GRADE  : ".$grade3."</h3>");  
                        //GPA
                        echo ("<h3>GPA : ".($total."</h3>"));


                ?>
            </div>
        </body>
</html>


