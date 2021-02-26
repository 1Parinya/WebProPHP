<?php
            $row = $_POST['row'];
            $column = $_POST['col'];
            $snum = intval($_POST['satr']);
            $enum = intval($_POST['endn']);
         
            
       /// declare function page_header with argument and defualt value
        function page_header($title, $bgcolor = "ffffff") {
            echo '<html lang="en"><head><meta charset="UTF-8">';
            echo '<title>' . $title . '</title></head>';
            echo '<body bgcolor="#' . $bgcolor . '">';
        }
        // declare function page_footer
        function page_footer($message = "ขอบคุณ") {
            echo '<hr>' . $message ;
            echo '</body></html>';
        }
        
        // declare function checker
        function show_checker( $maxRow, $maxCol, $bgcolor1, $bgcolor2) {
        
            echo "<p align='center'> Row = $maxRow , Column = $maxCol </p>";
            echo '<table align="center" border="1">' ;
            $count = 0 ;
            $sumnum = 0 ;
            $max = 0 ;
            $min = 99999 ;
            for($r = 1; $r <= $maxRow; $r++) {
                echo '<tr >';
            for($c = 1; $c <= $maxCol; $c++) {
            if ( $r % 2 == 1) {
                echo '<td bgcolor="#' . (($c % 2 == 1)?$bgcolor1:$bgcolor2) . '">';
            }
            else {
                echo '<td bgcolor="#' . (($c % 2 == 1) ? $bgcolor2 : $bgcolor1) . '">';
            }
                $rand = rand($_POST['satr'],$_POST['endn']);
                $count++;
                $sumnum += $rand;
                $minimum = Mini($rand,$min);
                $maximum = Maxi($rand,$max);
                echo $rand.'</td >';
            }
            echo '</tr>';
            }
        echo '</table>';
        if ($maxRow == $maxCol) $message = "This is Square";
        else $message = "This is Rectangle";
            echo "<p align='center'> $message </p>";
            echo "<p align='center'>".'random'.$_POST["satr"]."-".$_POST["endn"]."</p>";
            echo "<center>";
            echo "minimum number : ".$minimum."<br>";
            echo "maximum number : ".$maximum."<br>";
            Average( $sumnum,$count);
            echo "<center>";

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

        echo"Average : ".($sumnum1 / $count1);
    }
?>