<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <center>
    <h1>Binggo Game</h1>
    <?php
            //$randdom = rand(0,99);
            $start = 0;
            $end = 99;
            //สร้างตารางสุ่มตัวเลข0-99
            for($r = 1; $r <= 5 ; $r++) {
                echo "<table align='center' border='1' width='500'>";
            for($c = 1; $c <= 5 ; $c++) {
                echo "<td>";
                echo rand($start,$end)."</td>";
            }
            echo "</tr>";
            }
            echo "</table>";
    ?>


    </center>
</body>

</html>