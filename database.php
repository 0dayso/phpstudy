<?php
#echo "1111";
$pdo = new PDO("mysql:host=192.168.2.2;dbname=ufenqi","root","ufenqi123");
foreach ($pdo->query("select * from people") as $row){
    print_r ($row);
    echo "<br>";
}

?>