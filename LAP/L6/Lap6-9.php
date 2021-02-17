<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title> ตัวอย่าง Control statement ที่ 9 </title>
</head>
</head>

<body>
<form  method="get">
        START NUM :<input type="number" name="number1">
        <br>
        END NUM :<input type="number" name="number2">
        <br>
        Device by  :<input type="number" name="device">
        <br>
        <input type="submit" value="SUBMIT">
        <br><br>
        
    </form>
    <?php

         $snum = $_GET['number1'];
         $enum = $_GET['number2'];
         $device = $_GET['device'];
         $found = false;
         $num ;

            while($snum <= $enum) {
                
                if ($snum % $device == 0) {
                    $found = true;
                }else{
                    $found = false;
                }

                if($found){
                    echo "$snum "." ";
                }
               
                $snum++;
            }
            
    
            ?>
</body>

</html>