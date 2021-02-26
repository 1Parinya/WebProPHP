    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>

    <body>
        <br>
        <center>
            <form action="#" method="post">
                <table align='center' border='0'>
                    <td>
                        ค่าเริ่มต้น : <input type="number" name="startnum"><br><br>
                        ค่าสุดท้าย : <input type="number" name="endnum"><br><br>
                        ตัวเลขที่จะนำไปหาร : <input type="number" name="hnum"><br><br>
                        <input type="submit" value="Check Num"><br><br>
                    </td>
                </table>
            </form>


            <?php 
            error_reporting( error_reporting() & ~E_NOTICE );
                $startnum = intval($_POST["startnum"]); //ค่าเริ่มต้น
                $endnum = intval($_POST["endnum"]); //ค่าสุดท้าย
                $hnum = ($_POST["hnum"]); //ตัวเลขที่จะนำไปหาร
                $count = 0;
                $sum = 0;
              
                /*echo "ค่าเริ่มต้น :".$startnum."<br>";
                echo "ค่าสิ้นสุด :".$endnum."<br>";
                echo "ตัวเลขที่จะนำไปหาร:".$hnum."<br>";*/

                    //แสดงตัวเลข ที่ถูกหารลงตัว ว่ามีอะไรบ้าง
                    function checkNum($startnum,$endnum,$hnum){
                        for($startnum ;$startnum <= $endnum;$startnum ++){
                            if($startnum % $hnum == 0){
                                echo $startnum.",";
                            }  
                        }
                        echo"<br>";
                    }

                    //แสดงจำนวนของตัวเลข ที่ทำการหารได้ลงตัว ว่ามีทั้งหมดกี่ตัว
                    function countNum($startnum,$endnum,$hnum,$count){ 
                        for($startnum ;$startnum <= $endnum;$startnum ++){
                            if($startnum % $hnum == 0){
                                $count++;
                            }
                        }
                        echo "จำนวนที่หารลงตัว = ".$count."ตัว";
                        echo"<br>";
                    }

                    //ผลรวมของตัวเลข ที่ทำาการหารได้ลงตัว
                    function sumNum($startnum,$endnum,$hnum,$sum){
                        for($startnum ;$startnum <= $endnum;$startnum ++){
                            if($startnum % $hnum == 0){
                                $sum += $startnum ;
                            }  
                        }
                        echo "ผลรวมตัวเลขที่หารลงตัวคือ ".$sum;
                        echo"<br>";
                    }
            
                    checkNum($startnum,$endnum,$hnum);
                    countNum($startnum,$endnum,$hnum,$count);
                    sumNum($startnum,$endnum,$hnum,$sum);
        ?>
        </center>
    </body>

    </html>