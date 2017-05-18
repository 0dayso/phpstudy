<?php
/**
 * Created by PhpStorm.
 * User: zhangkaiwen
 * Date: 17/5/10
 * Time: 上午10:37
 */
//echo time()."<br>";
setcookie("user","kevin_1967",time()+3600);
print_r($_COOKIE);
echo "<br>";

//if (isset($_COOKIE['user'])){
//    echo $_COOKIE['user'];
//}
//sessions
session_start();
if (isset($_SESSION['view'])){
    $_SESSION['view'] = $_SESSION['view']+1;
}
else{
    $_SESSION['view'] = 1;
    //echo "viewPage=".$_SESSION['view'];
    }
echo "viewPage=".$_SESSION['view']."<br>";
//session_destroy();
//mail function
$to = "mouzunkui@ufenqi.com";
$subject = "this is a test mail";
$message = "this is the content mail";
$from = "test98123456@163.com";
$headers = "From:$from";
mail($to,$subject,$message,$headers);
echo "mail has already sent!!!";



