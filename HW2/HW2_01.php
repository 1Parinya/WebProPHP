<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Find Character</title>
</head>

<body>
    <form method="POST" action="#">
        <center>
            <h1>HW2-1 : Find Character</h1>
            Your Text: <input type="text" name="mes"><br><br>
            <input type="submit" name="submit" value="Submit">
            <input type="reset" value="Clear">

            <br><br>
    </form>

    <?php
            if(isset($_POST["submit"])){
                echo "<h2>Count Char in Sentence</h2>";
                $message = $_POST["mes"];
                $len = strlen($message);
                $arr = array();
                for($n = 0 ; $n < $len ; $n++) {
                    $arr[$n] = ord($message[$n]);
                }
                
                $arr_count = array_count_values($arr);
                $arr = array_unique($arr);
                sort($arr);

                for($n = 0 ; $n < count($arr) ; $n++){
                    if($n % 5 == 0){
                        echo "<br>";
                    }

                    if($arr[$n] === 32){
                        echo "Space = ".$arr_count["$arr[$n]"]." , ";
                    }
                    else{
                            echo chr($arr[$n]). " = ". $arr_count["$arr[$n]"]." , ";
                    }
                }
            }

        ?>
    </center>

</body>

</html>