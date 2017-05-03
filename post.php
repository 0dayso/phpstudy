<html>
<body>
//表单
<form method="POST" action="post.php">
Name:<input type="text" name="fname">
<input type="submit">
</form>

<?php
//获取post方式传的参数
$name = $_REQUEST['fname'];
echo "姓名是:".$name;
echo "<br>";
$name = $_POST['fname'];
echo "姓名:".$name;
echo "<br>";
//获取get方式请求的变量 eg:http://127.0.0.1/post.php?kevin=111ddddddd
echo "kevin变量值是:".$_GET['kevin'];
?>
</body>
</html>