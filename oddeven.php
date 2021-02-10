<html> 
    <body>
    <h2>Check Number</h2>
    <form action="#" method="get">
        <input type="text" name="number">
        <br>
        <input type="submit" value="check num">
        <br><br>
        
    </form>
    <?php
        $sum= 0;
        $odd= 0;
        $even = 0;
        $zero = 0;
        $num = $_GET['number'];
        echo "Num is ".$num;
        while($num > 0){
        $checknum = $num % 10;

        if($checknum % 2 == 0 && $checknum > 0){
            $even++;
        } else if($checknum %2 != 0){
            $odd++;
        }else if($checknum == 0){
            $zero++;
        }
        $num = (int) ($num/10);

    }

        echo "<table border=1>";
        echo "<tr><td>Odd = </td>";
        echo "<td>".$odd."</td>";
        echo "</tr>";
        echo "<tr><td>Even = </td>";
        echo "<td>".$even."</td>";
        echo "</tr>";
        echo "<tr><td>Zero = </td>";
        echo "<td>".$zero."</td>";
        echo "</tr>";
        echo "</table>";
    ?>
</body>
</html>

