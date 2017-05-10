<?php
//readfile()函数
echo readfile("1.txt");
echo "<br>";
//fopen函数
$myfile = fopen("1.txt",'r') or die("unable open file");
//一次性全部读取文件内容
echo fread($myfile,filesize("1.txt"))."<br>";
fclose($myfile);

$myfile = fopen("1.txt",'r') or die("unable open file");
//逐行读取文件内容
while(!feof($myfile)){
    echo fgets($myfile)."<br>";
}
fclose($myfile);
//逐个字符读取文件
$myfile = fopen("1.txt",'r') or die("unable open file");
while(!feof($myfile)){
    echo fgetc($myfile);
}
fclose($myfile);
echo "#############<br>";
//create new file
$newfile = fopen("new.txt","w");
$txt = "123test text from kevin_1967";
fwrite($newfile,$txt);
fclose($newfile);
?>