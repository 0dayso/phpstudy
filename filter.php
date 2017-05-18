<?php
//检测变量it是否是整数
$it = "123a";
if(filter_var($it,FILTER_VALIDATE_INT)){
   echo "it is a valid int";
}
else {echo "it is not a valid int";}
echo "<br>";

//检测用户get请求的参数是否正确
if(filter_has_var(INPUT_GET,"email")){
    if(filter_input(INPUT_GET,"email",FILTER_VALIDATE_EMAIL)){
        echo "input_email is valid<br>";
    }
    else {echo "输入的email参数有误<br>";}
}
else {echo "get请求没有email<br>";}

//净化用户输入,针对用户提交的url参数,有非法字符的,一律过滤掉
if (filter_has_var(INPUT_POST,"url")){
    $url = filter_input(INPUT_POST,"url",FILTER_SANITIZE_URL);
    echo "过滤后的url地址为:".$url."<br>";
}
else {echo "post请求里面没有url参数<br>";}

//检测用户多个输入变量,避免出现多个filter_var
echo "<br>";
$filters = array("name")
?>
