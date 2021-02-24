<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>ตัวอย่างที่ 9-2 </title>
</head>

<body>
    <?php
        $MaxStudent = 10;
        $score = array();
        for($n = 0 ; $n < $MaxStudent; $n++) {
        $score[$n] = rand(0, 100);
        }
        echo '<center><font size="4" color="blue"> Grade Report </font></center>';
        echo '<table border="1" align="center">';
        echo '<tr><td align="center" width="90">Student No.</td>';
        echo '<td align="center" width="90">Score</td></tr>';
        for($n = 0 ; $n < $MaxStudent; $n++) {
        echo '<tr><td align="center" width="90">' . ($n+1 ) . '</td>';
        echo '<td align="center" width="90">' . $score[$n] . '</td></tr>';
        }
        echo '<tr><td colspan="2" align="center"> Average Score : ';
        echo average( $score, $MaxStudent);
        echo '</td></tr></table>';
        function average($data, $max) {
            $total = 0;
            for($n = 0 ; $n < $max; $n++) {
            $total += $data[$n];
            }
            return( $total / $max );
            }
    ?>
</body>

</html>