<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title> ผลลัพธ์ ตัวอย่าง Control statement ที่12 </title>
</head>

<body>
    <?php
        $row = $_POST['row'];
        $column = $_POST['column'];
        $rowMax = intval( $row);
        $colMax = intval( $column);
        

        echo "<table align='center' border='4' width='300'>";
        for($r = 1; $r <= $rowMax ; $r++) { //สร้างแถว
        echo "<tr>"; //สร้างแถว
        for($c = 1; $c <= $colMax ; $c++) { //สร้างคอลั่ม
           
            $rad = rand(1,99);
            if( $rad % 2 == 0 )
            echo "<td align='center'><font color='blue'> $rad </font></td>";
            else if ( $rad % 2 == 1 )
            echo "<td align='center'><font color='red'> $rad </font></td>";
        
            
        /*if ($r == $c)
        echo "<td align='center'><font color='#33ff66'> $r,$c </font></td>";
        else echo "<td align='center'> $r,$c </td>";*/
        }
        echo "</tr>"; //ปิดการสร้างแถว
        }
        echo "</table>";
    ?>
    <a href='L6-12.php'> Back </a>
</body>

</html>