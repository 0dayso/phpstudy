<?php
echo $_FILES['file']['type'];

if($_FILES['file']['type'] == "image/jpeg"
||$_FILES['file']['type'] == "image/pjpeg"
||$_FILES['file']['type'] == "image/gif"
){
    if ($_FILES['file']['error'] >0){
        echo "error:".$_FILES['file']['error'];
    }
    else {
        echo $_FILES['file']['name'];
        echo "<br>";
        echo $_FILES['file']['type'];
        echo "<br>";
        echo $_FILES['file']['size'];
        echo "<br>";
        echo $_FILES['file']['error'];
        echo $_FILES['file']['tmp_name']."<br>";
        if (file_exists("uploads/".$_FILES['file']['name'])){
            echo "file already exists!";
        }
        else{
            echo copy($_FILES['file']['tmp_name'],"uploads/".$_FILES['file']['name']);
            //move_uploaded_file($_FILES['file']['tmp_name'],"uploads/".$_FILES['file']['name']);
            echo "已经将上传的gif文件保存";
        }
    }
}
else{
    echo "Invalid file type!";
}



?>