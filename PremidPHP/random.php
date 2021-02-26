<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
    table {
        width: 100px;
    }
    </style>
</head>

<body>


    <?php
if(isset($_POST['sub'])){
    $Row = $_POST['row'];
    $col = $_POST['col'];
    $start = $_POST['start'];
    $end = $_POST['end'];
   

    // declare function page_header with argument and defualt value
    function page_header($title, $bgcolor = "ffffff")
    {
        echo '<html lang="en"><head><meta charset="UTF-8">';
        echo '<title>' . $title . '</title></head>';
        echo '<body bgcolor="#' . $bgcolor . '">';
    }
    // declare function page_footer
    function page_footer($message = "ขอบคุณ")
    {
        echo '<hr>' . $message;
        echo '</body></html>';
    }
    // declare function checker
    function show_checker($maxRow, $maxCol, $bgcolor1, $bgcolor2,$start,$end)
    {
        echo "<p align='center'> Row = $maxRow , Column = $maxCol </p>";
        echo '<table align="center" border="1">';
        $sum = 0;
        $count = 0;
        

        for ($r = 1; $r <= $maxRow; $r++) {
            echo '<tr >';
            for ($c = 1; $c <= $maxCol; $c++) {
                if ($r % 2 == 1) {
                    echo '<td bgcolor="#' . (($c % 2 == 1) ? $bgcolor1 : $bgcolor2) . '">';
                } else {
                    echo '<td bgcolor="#' . (($c % 2 == 1) ? $bgcolor2 : $bgcolor1) . '">';
                }
                
                $s = rand($start,$end);
                $sum = $sum + $s;
                $count ++; 
                echo $s.'</td>';
                if($count == 1){
                    $max = $min = $s;
                }
                else {
                    $min = Minx($min,$s);
                    $max = Maxx($max,$s);
                }
            }
            echo '</tr>';
            
        }
        echo '</table>';
        if ($maxRow == $maxCol) $message = "This is Square";
        else $message = "This is Rectangle";
        echo "<p align='center'> $message </p>";
        echo "Min = ".$min."<br>";
        echo "Max = ".$max."<br>";
        avg($count,$sum);
    }

    //function Min
    function Minx($min,$s){
        return(min($min,$s));
    }
    //function Max
    function Maxx($max,$s){
        return(max($max,$s));
    }
    //function Averrage
    function avg($count,$sum){
        echo "Averrage = ".round($sum/$count,2);
    }

    page_header("Example 8-4", "FFDDEE");
    show_checker($Row, $col, "33ff99", "ffff99",$start,$end);
    page_footer("Thank You.");
}else {?>
    <!-- Main -->
    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
        <label for="">ROW :</label>
        <input type="number" name="row"><br>
        <label for="">Column :</label>
        <input type="number" name="col"><br>
        <label for="">Start Num :</label>
        <input type="number" name="start"><br>
        <label for="">End Num :</label>
        <input type="number" name="end">
        <input type="submit" value="submit" name="sub">
        <br>
    </form>
    <?php }?>
</body>

</html>