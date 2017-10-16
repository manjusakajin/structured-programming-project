<?php
    $host = 'localhost'; 
    $dbname = 'User';
    $name = 'demo';
    $password = '12345678';
    $db_conn = mysqli_connect($host,$name,$password)
    or
        die("Không thể kết nối database");
     mysqli_select_db($db_conn,$dbname) 
    or
        die("Không thể chọn database");
?>
