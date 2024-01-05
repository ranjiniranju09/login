<?php
include("connection.php");
if(isset($_POST['submit']))
{
	$Lid=$_POST['Lid'];
	$Fullname=$_POST['Fullname'];
	$Dob=$_POST['Dob'];
	$Gender=$_POST['Gender'];
	$Email=$_POST['Email'];
	$Mobno=$_POST['Mobno'];
	$Password=$_POST['Pwd'];

	$sql1= "INSERT INTO login values ('null','$Email','$Password','')";
	$sql = "INSERT INTO user VALUES ('null','$Lid','$Fullname','$Dob','$Gender','$Email','$Mobno')";
	if (($conn->query($sql) === TRUE) && ($conn->query($sql1) ==TRUE)) {
    echo "New record created successfully";
} else {
    echo $conn->error;
}
	

}

?> 