<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
     
 
    <?php  
        $n1 = $_GET["numx"];
        $n2 = $_GET["numy"];
        $op = $_GET["oparator"];
        echo"showresult <br>";
        echo "Num x = ".$n1."<br>";
        echo "um y = ".$n2."<br>";
        echo "oparator = ".$op."<br>";     

        if($op == '+'){
            echo "x + y =".($n1+$n2).
            "<br>";

        }
        elseif($op == '-'){
            echo "x - y =".($n1-$n2).
            "<br>";
        }
        elseif($op == '*'){
            echo "x * y =".($n1*$n2).
            "<br>";
        }
        elseif($op == '/'){
            echo "x / y =".($n1/$n2).
            "<br>";
        }


    ?>
    
</body>
</html>