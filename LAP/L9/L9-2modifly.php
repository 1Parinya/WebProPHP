<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>ตัวอย่างที่ 9-2 ปรับปรุง </title>
</head>

<body>
    <center>
        <form action="#" method="get">
            ใส่จำนวนนักเรียน : <input type="number" name="ns" min="0"><br><br>
            <input type="submit" value="ตกลง"><br><br>

            <?php
            error_reporting( error_reporting() & ~E_NOTICE );
            $MaxStudent = $_GET["ns"];
            $score = array();
            $arr=array();
            
            for($n = 0 ; $n < $MaxStudent; $n++) {
            $score[$n] = rand(0, 100);
            }
            echo '<center><font size="4" color="blue"> Grade Report </font></center>';
            echo '<table border="1" align="center">';
            echo '<tr><td align="center" width="90">Student No.</td>';
            echo '<td align="center" width="90">Score</td>';
            echo '<td align="center" width="90">Geade</td></tr>';

            for($n= 0 ; $n < $MaxStudent; $n++) {
            echo '<tr><td align="center" width="90">' . ($n+1 ) . '</td>';
            echo '<td align="center" width="90">' . $score[$n] . '</td>';
            echo '<td align="center" width="90">'; 
            calgrade($score[$n]);
            echo '</td></tr>';
            }
            echo '<tr><td colspan="3" align="center"> Average Score : ';
            echo average( $score, $MaxStudent);
            

            echo '<tr><td colspan="3" align="center">  student max Score :'.max($score).'';

            echo '<tr><td colspan="3" align="center">  student min Score : '.min($score).'';
            echo '</td></tr>';

            
            echo '<tr><td colspan="3" align="center">  คนที่ได้เกรด F มี: '.sumgradeF($score).'คน';
            echo '</td></tr>';

            echo '<tr><td colspan="3" align="center">  คนที่ได้เกรด D มี: '.sumgradeD($score).'คน';
            echo '</td></tr>';

            echo '<tr><td colspan="3" align="center">  คนที่ได้เกรด C มี: '.sumgradeC($score).'คน';
            echo '</td></tr>';

            echo '<tr><td colspan="3" align="center">  คนที่ได้เกรด B มี: '.sumgradeB($score).'คน';
            echo '</td></tr>';

            echo '<tr><td colspan="3" align="center">  คนที่ได้เกรด A มี: '.sumgradeA($score).'คน';
            echo '</td></tr></table>';

            function average($data, $max) {
                $total = 0;
                for($n = 0 ; $n < $max; $n++) {
                $total += $data[$n];
                }
                return( $total / $max );
                }

            function calgrade($score){
              
                if($score <= 49){
                    echo("F");
                   
                }
                else if($score <= 59){
                    echo("D");
                }
             
                else if($score <= 69){
                    echo("C");
                }
              
                else if($score <= 79){
                    echo("B");
                }
               
                else if($score <=100 ){
                    echo("A");
                }
            }
            function sumgradeF($score){
                $arr=array();
                for($i=0;$i< count($score);$i++){
                    if($score[$i] <= 49){
                        $arr[0]+=1;
                        
                    }
                
                }
            return $arr[0];
             }

             function sumgradeD($score){
                $arr=array();
                for($i=0;$i< count($score);$i++){
                    if($score[$i] <= 59){
                        $arr[1]+=1;;
                        
                    }
                
                }
            return $arr[1];
             }

             function sumgradeC($score){
                $arr=array();
                for($i=0;$i< count($score);$i++){
                    if($score[$i] <= 69){
                        $arr[2]+=1;;
                        
                    }
                }
            return $arr[2];
             }

             function sumgradeB($score){
                $arr=array();
                for($i=0;$i< count($score);$i++){
                    if($score[$i] <= 79){
                        $arr[3]+=1;;
                        
                    }
                
                }
            return $arr[3];
             }
             
             function sumgradeA($score){
                $arr=array();
                for($i=0;$i< count($score);$i++){
                    if($score[$i] <=100){
                        $arr[4]+=1;;
                        
                    }
                }
            return $arr[4];
             }
        ?>
        </form>
    </center>
</body>

</html>