<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lottery</title>
</head>

<body bgcolor="#b1e0e6">
    <form action="Result-lottery.php" method="post">
        <h1 align=center style="color:#3850a2">โปรแกรม ตรวจ เลขท้าย 2 ตัว</h1>
        <h2 align=center style="color:#e81e25;"> รางวัล เมื่อถูกเลขท้าย 2 ตัว (ต้นทุนซื้อ X 60 เท่า)</h2>
        <h2 align=center style="color:#e81e25;"> เช่น ถ้าซื้อ 10 บาท ถูกรางวัลรับเงิน 600 บาท <br>
            เลขเสี่ยงโชค [0-99] <input type="text" name="lottery_number" required>
        </h2>
        <p style="text-align:center;color:#e81e25;font-size:40px; padding-top:10px;">* ซื้อได้ ตั้งแต่ 10 - 500 บาท
            เท่านั้น</p>
        <p style="text-align:center;color:#e81e25;font-size:40px;">จำนวนเงินที่คุณต้องการซื้อ [10 - 500 บาท]
            <input type="number" min="10" max="500" style="width:10%" name="money" required>
        </p>
        <center>
            <button>ตรวจรางวัล</button>
        </center>
    </form>

</body>

</html>