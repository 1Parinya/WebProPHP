<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>ตัวอย่างที่ 9-2 </title>
</head>

<body>
<center>
<form action="#" method="get">
ใส่จำนวนนักเรียน : <input type="number" name="ns" min="0"><br><br>
<input type="submit" value = "ตกลง"><br><br>

    <?php
    error_reporting( error_reporting() & ~E_NOTICE );
        $nstu = $_GET["ns"];
        $MaxStudent = 10;
        $score = array();
        
        for($n = 0 ; $n < $MaxStudent; $n++) {
        $score[$n] = rand(0, 100);
        }
        echo '<center><font size="4" color="blue"> Grade Report </font></center>';
        echo '<table border="1" align="center">';
        echo '<tr><td align="center" width="90">Student No.</td>';
        echo '<td align="center" width="90">Score</td>';
        echo '<td align="center" width="90">Geade</td></tr>';

        for($n= 0 ; $n < $nstu; $n++) {
        echo '<tr><td align="center" width="90">' . ($n+1 ) . '</td>';
        echo '<td align="center" width="90">' . $score[$n] . '</td>';
        echo '<td align="center" width="90">'; 
        calgrade($score[$n]);
        echo '</td></tr>';
        }
        echo '<tr><td colspan="3" align="center"> Average Score : ';
        echo average( $score, $MaxStudent);
        

        echo '<tr><td colspan="3" align="center"> max student : max Score :'.max($score).'';

        echo '<tr><td colspan="3" align="center"> max student : min Score : '.min($score).'';
        echo '</td></tr></table>';
        function average($data, $max) {
            $total = 0;
            for($n = 0 ; $n < $max; $n++) {
            $total += $data[$n];
            }
            return( $total / $max );
            }
        function calgrade($score){
            if($score <= 49){
                echo("F");
            }
            else if($score <= 54){
                echo("D");
            }
            else if($score <= 59){
                echo("D+");
            }
            else if($score <= 64){
                echo("C");
            }
            else if($score <= 69){
                echo("C+");
            }
            else if($score <= 74){
                echo("B");
            }
            else if($score <= 79){
                echo("B+");
            }
            else if($score <=100 ){
                echo("A");
            }
        }

       

    ?>
    </form>
    </center>
</body>

</html>