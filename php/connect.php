<?php 
    $conn = new mysqli("localhost","root","BbilkB414148","db_dev");
    $conn->set_charset("utf8");
    if ($conn->connect_errno) {
        die("Connect Error".$conn->connect_error);
    }


?>