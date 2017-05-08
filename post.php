<html xmlns="http://www.w3.org/1999/html">
<body>

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
echo "<br>";
echo $_SERVER["PHP_SELF"];
?>
<br>
####################################
<?php
$name = $email = $gender = $comment = $website = "";
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $name = test_input($_POST['name']);
    $email = test_input($_POST['email']);
    $gender = test_input($_POST['gender']);
    $comment = test_input($_POST['comment']);
    $website = test_input($_POST['website']);

}
function test_input($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>
<h2>PHP验证表单实例</h2>
<form method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
    姓名:<input type="text" name="name">
    <br><br>
    邮箱:<input type="text" name="email">
    <br><br>
    网址:<input type="text" name="website">
    <br><br>
    评论:<textarea name="comment" cols="40" rows="5"></textarea>
    <br><br>
    性别:<input type="radio" name="gender" value="female">女性
    <input type="radio" name="gender" value="male">男性
    <br><br>
    <input type="submit" name="submit" value="提交">
</form>
<?php
echo $name."<br>";
echo $email."<br>";
echo $gender."<br>";
echo $comment."<br>";
echo $website."<br>";
?>
</body>
</html>