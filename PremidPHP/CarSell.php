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
        <?php
    error_reporting( error_reporting() & ~E_NOTICE );
    $namecustomer = $_GET["cname"];
    $price = $_GET["num"];
    $Car_Installments = $_GET["ca"];
    $total = $price*$Car_Installments;
    //ราคารถ
    $Accord = 1799000;
    $Civic = 1149000;
    $Jazz = 849000;
    $City = 749000;

   
    echo"<br>";
    echo"<table alingt = 'center'  border='1' >";
    echo"<tr>";
    echo"<td>ชื่อลูกค้า :</td>";
    echo"<td>".$namecustomer."</td>";
    echo"</tr>";

    echo"<tr>";
    echo"<td>ผ่อนงวดละ :</td>";
    echo"<td>".$price."</td>";
    echo"</tr>";

    echo"<tr>";
    echo"<td>จำนวนงวด :</td>";
    echo"<td>".$Car_Installments ."</td>";
    echo"</tr>";

    echo"<tr>";
    echo"<td>ยอดรวมเงิน :</td>";
    echo"<td>".$total ."</td>";
    echo"</tr>";

    echo"<tr>";
    echo"<td colspan='2'>";
    carCheck($total,$City,$Jazz,$Civic,$Accord);
    echo"</td>";
    echo"</tr>";
    echo"<tr>";
    echo"<td colspan='2'><center><a href='CarPay.php'><input type ='button' value='Back To HOME'> </a></center> </td>";
    echo"</tr>";

    echo"</table>";


    function carCheck($total,$City,$Jazz,$Civic,$Accord){
        if($total < $City) {
            echo"<center>".'ยอดเงินของท่านไม่เพียงพอ'."</center>";
        }
        else if($total>=$Accord){
            echo"<center>".'รถยนต์ท่านสามรถซื้อรถได้'."</center>";
            echo"<tr>";
            echo"<td><img width=300px src=img/Accord.png ><img width=200px src=img/logo-accord.png ></td>";
            echo"<td>".$Accord."</td>";
            echo"</tr>";

            echo"<tr>";
            echo"<td><img width=300px src=img/Civic.png ><img width=200px src=img/logo-civic.png ></td>";
            echo"<td>".$Civic."</td>";
            echo"</tr>";

            echo"<tr>";
            echo"<td><img width=300px src=img/Jazz.png ><img width=200px src=img/logo-jazz.png ></td>";
            echo"<td>".$Jazz."</td>";
            echo"</tr>";

            echo"<tr>";
            echo"<td><img width=300px src=img/City.png ><img width=200px src=img/logo-city.png ></td>";
            echo"<td>".$City."</td>";
            echo"</tr>";
        }

        else if ($total < $Accord && $total > $Civic) {
            echo"<center>".'รถยนต์ท่านสามรถซื้อรถได้'."</center>";

            echo"<tr>";
            echo"<td><img width=300px src=img/Civic.png ><img width=200px src=img/logo-civic.png ></td>";
            echo"<td>".$Civic."</td>";
            echo"</tr>";

            echo"<tr>";
            echo"<td><img width=300px src=img/Jazz.png ><img width=200px src=img/logo-jazz.png ></td>";
            echo"<td>".$Jazz."</td>";
            echo"</tr>";

            echo"<tr>";
            echo"<td><img width=300px src=img/City.png ><img width=200px src=img/logo-city.png ></td>";
            echo"<td>".$City."</td>";
            echo"</tr>";
          
        }
        else if ($total < $Civic && $total > $Jazz) {
            echo"<center>".'รถยนต์ท่านสามรถซื้อรถได้'."</center>";

            echo"<tr>";
            echo"<td><img width=300px src=img/Jazz.png ><img width=200px src=img/logo-jazz.png ></td>";
            echo"<td>".$Jazz."</td>";
            echo"</tr>";

            echo"<tr>";
            echo"<td><img width=300px src=img/City.png ><img width=200px src=img/logo-city.png ></td>";
            echo"<td>".$City."</td>";
            echo"</tr>";
     
        }
        else if ($total < $Jazz && $total > $City) {
            echo"<center>".'รถยนต์ท่านสามรถซื้อรถได้'."</center>";

            echo"<tr>";
            echo"<td><img width=300px src=img/City.png ><img width=200px src=img/logo-city.png ></td>";
            echo"<td>".$City."</td>";
            echo"</tr>";
     
        }
      
    }
    
?>
    </center>
</body>

</html>