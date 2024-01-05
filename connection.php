<?php
//$con=mysql_connect("localhost","root","");
$conn = new mysqli('localhost', 'root','' ,'userreg');

//mysql_select_db("ureg",$con);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


?>
