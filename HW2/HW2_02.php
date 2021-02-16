<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Find Ascii</title>
</head>

<body>
    <form method="POST" action="#">
        <center>
            <h1>HW2-2 : Find Ascii</h1>
            Your Text : <input type="text" name="mes"><br><br>
            <input type="submit" name="submit" value="Submit">
            <input type="reset" value="Clear">

            <br><br>
    </form>

    <?php
            if(isset($_POST["submit"])){
                echo "<h2>Count Char in Sentence</h2>";
                $message = $_POST["mes"];
                $lent = strlen($message);
                $aray = array();

                foreach(count_chars($message,1) as $key => $value){ 
                    if(($key > 64 && $key < 91) ||($key > 96 && $key < 123)){
                        echo chr($key)." Ascii =".$key."<br>";
                    }
                }
            }
        ?>
    </center>

</body>

</html>