<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <center>
        <form action="cal.php" method="post">
            <label for="fruit">Choose a fruit:</label>
            <select name="fruit" id="fruit">
                <option value="tubtim" name="tubtim">ทับทิม</option>
                <option value="kiwie" name="kiwie">กีวี่</option>
                <option value="salee" name="salee">สาลี่</option>
            </select>
            <br><br>
            <input type="radio" name="kg" value="1"> 1 kg.
            <input type="radio" name="kg" value="2"> 2 kg.
            <input type="radio" name="kg" value="3"> 3 kg.
            <br><br>
            เลือกความกว้าง : <input type="number" name="w" min="100" max="500">
            <br><br>
            <input type="submit" value="Submit">
        </form>
    
    ทับทิม 100บาท ต่อ กิโลกรัม<br><br>
    กี่วี่ 200บาท ต่อ กิโลกรัม<br><br>
    สาลี่ 300บาท ต่อ กิโลกรัม<br><br>
    </center>
</body>

</html>