
<?php 
include("connection.php");
if(isset($_POST["submit"]))
{
$Email=$_POST['Email'];
$Password=$_POST['Pwd'];
$qry="select * from login where Email='$Username'and Pwd='$Password'";
if(($qry)>0)
{
	$rows=($qry);
	if($rows['Type']=="admin")
	{
		header("location:admindash.html");
		
	}
	else if($rows['Type']=="user"){
	session_start();
	$_SESSION['lid']=$rows['LId'];
		header("location:studdash.html");

	}
	else{
?>
<script type="text/javascript">
alert("Invalid Username");
</script>
<?php		
	}
}
else {
?>
<script type="text/javascript">
alert("Invalid Username");
</script>
<?php
	}
}	

?>