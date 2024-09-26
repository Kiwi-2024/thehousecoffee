<?php
$host = "localhost";
$username = "root";
$password = "";
$dbname = "store_data";
$port = 3307;
$conn = new mysqli($host, $username, $password, $dbname, $port);
if($conn->connect_error){
    die("Kết nối không thành công".$conn->connect_error);
}

?>
