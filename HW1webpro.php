<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
    div {text-align: center;}
    </style>
    <title>HW1:WEBPRO</title>
</head>
        <body>
                <center>
                    <h1>HW:1 FIND MIN MAX AVERAGE</h1>
                    <form action="HW1webpro.php" method="get">
                    <h2>
                        Num 1: <input type="number" name="num1" ><br>
                        Num 2: <input type="number" name="num2" ><br>
                        Num 3: <input type="number" name="num3" ><br>
                    
                        <br>
                        <input type="radio" name="operator"value="Minimum">Minimum<br>
                        <input type="radio" name="operator"value="Maximum">Maximum<br>
                        <input type="radio" name="operator"value="Average">Average<br>
                        <br>
                        </h2>
                        <input type="submit"><br><br><br><br>
                    </form>
                </center>
                <div>
                <?php
                error_reporting( error_reporting() & ~E_NOTICE );
                        $number1 = $_GET['num1'];
                        $number2 = $_GET['num2'];
                        $number3 = $_GET['num3'];
                        $operator = $_GET['operator'];;
                    
                        if($operator == "Minimum"){
                            echo"MINIMUM OF NUMBER = ".(Min($number1,$number2,$number3));
                        }
                        else if($operator == "Maximum"){
                            echo"MAXIMUM OF NUMBER = ".(Max($number1,$number2,$number3));
                        }
                        else if($operator == "Average") {
                            echo"AVERAGE OF NUMBER = ".(($number1 + $number2 + $number3) / 3);
                        }
            
                ?>
                </div>
        </body>
</html>