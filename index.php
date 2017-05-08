<?php
include "include.php";
//include 引入了一个不存在的文件脚本可继续执行
include "noexist.php";
//使用require则不然
require "include.php";
echo "helloworld";
echo "<br>";
$x = 5;
var_dump($x);
$y = 6;
$z = 7;
echo $x+$y+$z;
echo "<br>";
$txt = "this is a test text";
echo $txt;
echo "<br>";
//函数使用
function test(){
    $a = "111";
    echo "变量a=$a";
    echo "#################<br>";
    $GLOBALS['z'] = $GLOBALS['y'] + $GLOBALS['y'];

}
//变量
test();
echo "变量x:$x";
echo "变量a=$a";
echo "全局变量z=$z";
echo "<br>";
function test1(){
    static $b= 1; //变量b经过static修饰,b的值不会发生变化,如果没有static,每次执行test1函数,变量b的值都是1
    echo "$b@";
    $b++;
}

test1();
test1();
test1();

//超全局变量,通过
//函数传参数
echo "<br>";
for($i=0;$i<=500;$i++){
    echo "#";
}
echo "<br>";
function writename($name){
    echo "$name zhang";
}
writename("san");
echo "This", " string", " was", " made", " with multiple parameters.";
print "<br>";
print "test";

$cars=array("Volvo","BMW","SAAB");
echo $cars[0];
echo "<br>";
echo strlen("hello word"); //返回字符串长度
echo strpos("helloword","word"); //返回word字符串在前面字符串的位置
//定义一个常量
define("commonvar","this is a common var");
echo "<br>";
echo commonvar;
echo "<br>";
//字符串拼接
$txt1 = "hello";
$txt2 = $txt1."word!";
echo $txt2;
echo $txt1.$txt2;
echo "<br>";
//ifelse 语句
$t = date("H");
if ($t < 20){
    echo "hava a good day";
}
echo "<br>";
//switch语句
$number = 3;
switch ($number) {
    case 1:
        echo "number is 1";
        break;
    case 2:
        echo "number is 2";
        break;
    default:
        echo "nunber is neither 1 nor 2";

}
echo "<br>";
$y = 1;
while($y <= 10){
    echo "变量y的数值是:$y";
    $y++;
}
echo "<br>";
//do while循环和while循环的区别就是,do while循环先不判断变量,直接循环一遍再判断
//下面的案例 虽然变量z的值是6,不小于5,输出的效果同样执行了一次循环
$z = 6;
do {
    echo "变量z的数值是$z";
}
while ($z < 5);
echo "<br>";
//for 循环
for ($i=1;$i<=10;$i++){
    echo "数字i=$i";
}
echo "<br>";
//foreach 循环遍历一个数组
$colors = array("red","green","blue");
foreach ($colors as $col){
    echo "y颜色数组是$col";

}
echo "<br>";
//数组
$cars = array("bmw","volvo","audio");
echo "I like ".$cars[0].", ".$cars[1]." and ".$cars[2];
echo count($cars);
sort($cars);
echo "<br>";
echo "<br>";
//全局变量
echo $GLOBALS["y"];
$GLOBALS['r'] = $GLOBALS['x']+$GLOBALS['y'];
echo $GLOBALS['r'];
echo $_SERVER['HTTP_HOST'];
echo $_SERVER['HTTP_USER_AGENT'];
echo $_SERVER['PHP_SELF'];
echo "<br>";
echo $_SERVER['SCRIPT_NAME'];
echo $_SERVER['GATEWAY_INTERFACE'];
echo "<br>";
//preg_match 匹配到返回1,匹配不到返回0
$aa = preg_match("/php/","php is the best language");
echo $aa."<br>";
echo "!!!!!!";
preg_match('/(foo)(bar)(baz)/', 'foobarbaz', $matches1, PREG_OFFSET_CAPTURE);
//print_r($matches1);
preg_match("/^(http:\/\/).*?([^\/]+)/i","http://www.php.net/index.html", $matches);
print_r($matches);
echo $matches[2];
echo "###########<br>";
preg_match("/^(http:\/\/)?([^\/]+)/i","http://www.jb51.net/index.html", $matches2);
echo $matches2[2];
echo "###########<br>";
//多维数组
$cars = array(
    array('bwm',12,28),
    array('volvo',24,23),
    array('audio',35,90)
);
echo $cars[0][0]."库存:".$cars[0][1];
echo $cars[1][0]."库存:".$cars[1][1];
echo $cars[2][0]."库存:".$cars[2][1];
echo "#############<br>";
echo date("Y-m-d");
echo date("Y/m/d");
echo date("h:i:sa");
date_default_timezone_set('Asia/Shanghai');
echo date("h:i:sa");
$da = strtotime("10:38pm April 15 2015");
echo "创建日期是:".date("Y-m-d h:i:sa",$da);
?>