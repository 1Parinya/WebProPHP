<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>ตัวอย่างที่ 9-3 </title>
</head>

<body>
    <?php
$weekdays = array( "sun" => "อาทิตย์", "mon" => "จันทร์", "tue" => "อังคาร",
"wed" => "พุธ", "thu" => "พฤหัสบดี", "fri" => "ศุกร์",
"sat" => "เสาร์");

$months = array( "jan" => "มกราคม", "feb" => "กุมภาพันธ์", "mar" => "มีนาคม",
"apr" => "เมษายน", "may" => "พฤษภาคม", "jun" => "มิถุนายน",
"jul" => "กรกฎาคม", "aug" => "สิงหาคม", "sep" => "กันยายน",
"oct" => "ตุลาคม", "nov" => "พฤศจิกายน", "dec" => "ธันวาคม" );

$d = $weekdays[ strtolower( date("D") ) ];
$m = $months[ strtolower( date( "M" ) ) ];
$y = date( "Y") + 543;
echo "วันนี้คือวัน $d ที่ " . date("j") . " $m พ.ศ. $y<br>";
echo "<table width='500'><tr><td>";
print_array();
echo "</td>";
$weekdays["thu"] = "Thursday";
$weekdays[] = "** ทดสอบ **";
echo "<td>";
print_array();
echo "</td></tr></table>";
function print_array() {
global $weekdays;
echo "<pre>";
print_r( $weekdays );
echo "</pre>";
}
?>
</body>

</html>