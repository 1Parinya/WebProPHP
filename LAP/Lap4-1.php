<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        <?php
                $x = 100;
                $y = "200";
                $z = '300';
                $add = $x + $y;
                $sub = $z - $x;
                $cuu = $y * $z;
                $han = $cuu / 300;
                $message = "Hello World";
               
                echo "ผลบวก 100+200 =".$add; echo "<br />";
                echo "ผลลบ 300-100 =".$sub; echo "<br />";

                echo "ผลคูณ 200 * 300 =".$cuu; echo "<br />";
                echo "ผลหาร 600 / 300 =".$han; echo "<br />";
                echo $message; echo "<br />";
        ?>
</body>
</html>