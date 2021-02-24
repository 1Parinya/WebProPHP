<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
$sumf =$_POST["fruit"];
$w = $_POST["w"];
echo"<img width ='$w' src='image/$sumf.jpg'>";
$kg = $_POST["kg"];
if ($sumf == "tubtim"){
    echo "<br>ราคากิโลละ : 100 บาท $kg kg." , 100*$kg."บาท";
}
else if ($sumf == "kiwie"){
    echo "<br>ราคากิโลละ : 200 บาท $kg kg." , 200*$kg."บาท";
}
else if ($sumf == "salee"){
    echo "<br>ราคากิโลละ : 300 บาท $kg kg." , 300*$kg."บาท";
}

?>

</body>

</html>