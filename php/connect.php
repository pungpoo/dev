<?php 
    $conn = new mysqli("localhost","root","xxx","db_dev");
    $conn->set_charset("utf8");
    if ($conn->connect_errno) {
        die("Connect Error".$conn->connect_error);
    }


?>
