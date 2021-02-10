<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title> โปรแกรมค านวณเกรด </title>
</head>

<body>
    <?php
        $hw = $_GET['hw'];
        $midterm = $_GET['midterm'];
        $final = $_GET['final'];
        if ($hw > 30) $hw = 30;
        if ($midterm > 35) $midterm = 35;
        if ($final > 35) $final = 35;

        echo "<p>";
        echo "<b>ข้อมูลคะแนน </b><br />";
        echo "Homework : <i> $hw </i> <br/>";
        echo "Midterm : <i> $midterm </i> <br/>";
        echo "Final : <i> $final </i> <br/>";
        $total = $hw + $midterm + $final;

        echo "Total Score : $total <br>";
        if ($total >= 80) 
        echo "Result Grade : <img src='picgrade/A.jpg'><br>";
        

        elseif ($total >= 70) 
        echo "Result Grade : <img src='picgrade/B.jpg'><br>";

        elseif ($total >= 60) 
        echo "Result Grade : <img src='picgrade/C.jpg'><br>";

        elseif ($total >= 50) 
        echo "Result Grade : <img src='picgrade/D.jpg'><br>";

        else 
        echo "Result Grade : <img src='picgrade/F.jpg'><br>";
        echo "<br>";
        echo "<a href='L6-11.php'> <big>Back </big></a>";
    ?>

</body>

</html>