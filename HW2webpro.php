<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
    div {text-align: center;}
    </style>
    <title>HW2</title>
</head>
<body>
                <center>
                    <h1>HW:2 SUM OF NUMBER</h1>
                    <form action="HW2webpro.php" method="get">
                    <h2>
                        Num 1: <input type="text" name="num1" ><br><br>
                            <input type="radio" name="operator" value="+"> + :
                            <input type="radio" name="operator" value="-"> - :
                            <input type="radio" name="operator" value="*"> * :
                            <input type="radio" name="operator" value="/"> / :
                            <br><br>

                        Num 2: <input type="text" name="num2" ><br><br>
                            <input type="radio" name="operator1" value="+"> + :
                            <input type="radio" name="operator1" value="-"> - :
                            <input type="radio" name="operator1" value="*"> * :
                            <input type="radio" name="operator1" value="/"> / :
                            <br><br>

                        Num 3: <input type="text" name="num3" >
                        <br><br><br>
                        </h2>
                        <input type="submit">
                        <br><br><br><br>
                    </form>
                </center>
            <div>
            <?php
            error_reporting( error_reporting() & ~E_NOTICE );
                $number1 = $_GET['num1'];
                $number2 = $_GET['num2'];
                $number3 = $_GET['num3'];
                $operator = $_GET['operator'];
                $operator1 = $_GET['operator1'];

                /*echo ("number1 = ".$number1."<br>");
                echo ("number2 = ".$number2."<br>");
                echo ("number3 = ".$number3."<br>");
                echo ("oparator1 = ".$operator."<br>");
                echo ("oparator2 = ".$operator1."<br>");*/

                //การขึ้นต้นด้วยบวกต่างๆ
                if($operator == "+" && $operator1 == "+"  ){
                    echo"SUM OF NUMBER = ".( $number1 + $number2 + $number3);
                }
                        else if($operator == "+" && $operator1 == "-"  ){
                            echo"SUM OF NUMBER = ".($number1 + $number2 - $number3);
                        }
                        else if($operator == "+" && $operator1 == "*"  ){
                            echo"SUM OF NUMBER = ".($number1 + $number2 * $number3);
                        }
                        else if($operator == "+" && $operator1 == "/"  ){
                            echo"SUM OF NUMBER = ".($number1 + $number2 / $number3);
                        }
                        
                //การขึ้นต้นด้วยลบต่างๆ
                else if($operator == "-" && $operator1 == "-" ){
                    echo"SUM OF NUMBER = ".(($number1 - $number2 )- $number3);
                }
                        else if($operator == "-" && $operator1 == "+"  ){
                            echo"SUM OF NUMBER = ".($number1 - $number2 + $number3);
                        }
                        else if($operator == "-" && $operator1 == "*"  ){
                            echo"SUM OF NUMBER = ".($number1 - $number2 * $number3);
                        }
                        else if($operator == "-" && $operator1 == "/"  ){
                            echo"SUM OF NUMBER = ".($number1 - $number2 / $number3);
                        }
                            
                //การขึ้นต้นด้วยคูณต่างๆ
                else if($operator == "*" && $operator1 == "*" ) {
                    echo"SUM OF NUMBER = ".(( $number1 * $number2 )* $number3);
                }
                        else if($operator == "*" && $operator1 == "+"  ){
                            echo"SUM OF NUMBER = ".($number1 * $number2 + $number3);
                        }
                        else if($operator == "*" && $operator1 == "*"  ){
                            echo"SUM OF NUMBER = ".($number1 * $number2 * $number3);
                        }
                        else if($operator == "*" && $operator1 == "/"  ){
                            echo"SUM OF NUMBER = ".($number1 * $number2 / $number3);
                        }


                 //การขึ้นต้นด้วยหารต่างๆ
                else if($operator == "/" && $operator1 == "/" ) {
                    echo"SUM OF NUMBER = ".( ($number1 / $number2) / $number3);
                }
                        else if($operator == "/" && $operator1 == "+"  ){
                            echo"SUM OF NUMBER = ".($number1 / $number2 + $number3);
                        }
                        else if($operator == "/" && $operator1 == "*"  ){
                            echo"SUM OF NUMBER = ".($number1 / $number2 * $number3);
                        }
                        else if($operator == "/" && $operator1 == "/"  ){
                            echo"SUM OF NUMBER = ".($number1 / $number2 / $number3);
                        }
            ?>
            </div>
</body>
</html>