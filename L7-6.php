<?php
echo getcwd()."<br>";
$dir = 'C://';
$files = scandir($dir); //แสดงไฟล์ทั้งหมด
foreach($files as $value){
echo "$value<br>";
}
echo getcwd()."<br>";
chdir("..\..\..\\");//ถอยออกจากไฟล์ไป1ขั้น

echo getcwd()."<br>";
chdir("htdocs\\WebProPHP\L7-6.php");
echo getcwd();
?>