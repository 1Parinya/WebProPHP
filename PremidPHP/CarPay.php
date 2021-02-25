<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="CarSell.php" method="get">
        <table align='center' border='1' width='500'>
            <tr>
                <td>ชื่อ-นามสกุลลูกค้า :</td>
                <td>
                    <input type="text" name="cname">
                </td>
            </tr>

            <tr>
                <td>จำนวนเงินที่ต้องการผ่อนต่องวด :</td>
                <td>
                    <input type="number" name="num" min="0">
                </td>
            </tr>

            <tr>
                <td>จำนวนงวดที่ต้องการ :</td>
                <td> <select name="ca" id="ca">
                        <option value="36">36งวด</option>
                        <option value="48">48งวด</option>
                        <option value="60">60งวด</option>
                        <option value="72">72งวด</option>
                    </select></td>
            </tr>

            <tr>
                <td colspan="2" align='center'>
                    <input type="submit" value="ซื้อรถ">
                </td>
            </tr>
        </table>

    </form>


</body>

</html>