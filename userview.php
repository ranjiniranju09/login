<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
    <form id="form1" name="form1" method="post" action="">
        <table width="395" border="1">
            <?php
					include("connection.php");
		
					// Check the connection
					if (!$conn) {
						die("Connection failed: " . mysqli_connect_error());
					}
		
					// Use the connection parameter in mysqli_query
					$qry = mysqli_query($conn, "SELECT * FROM user");
					var_dump($qry);
					// Check for errors in the query
					if ($qry === false) {
						die("Query failed: " . mysqli_error($conn));
					}
					$qryy=mysqli_num_rows($qry);
					//echo $qryy;
					if (mysqli_num_rows($qry) > 0) {
                ?>
				
            <tr>
                <td width="39"><div align="center">Full Name</div></td>
                <td width="48"><div align="center">Email</div></td>
                <td width="27"><div align="center">Mobileno</div></td>
				<td></td>
                  
            </tr>
                <?php
					for ($i = 0; $i< mysqli_num_rows($qry); $i++){
                	$row = mysqli_fetch_array($qry) ;
					
                ?>
                    <tr>
            <td><div align="center"><?php echo $row['Fullname']; ?></div></td>
                <td><div align="center"><?php echo $row['Email']; ?></div></td>
                <td><div align="center"><?php echo $row['Mobno'] ; ?></div></td>
				
                 
					<td><form method='post' action='#' enctype='multipart/form-data'>
                            <input type='hidden' name='uid' value='<?php echo $row['uid'];?> '>
                            <input type='submit' value='Delete' name="submit">                 
                        </form>
                        <form method='post' action='editusers.php' enctype='multipart/form-data'>
                            <input type='hidden' name='Uid' value='<?php echo $row['Uid'];?> '>
                            <input type="hidden" name='Fullname' value='<?php echo $row['Fullname'];?>'>
                            <input type="hidden" name='Email' value='<?php echo $row['Email'];?>'>
                            <input type="hidden" name='Mobno' value='<?php echo $row['Mobno'];?>'>
                            <input type='submit' value='Edit' name="submit">
                        </form>
                    </td>
					</tr>
                    <?php
				}
            }
            ?>
        </table>
    </form>
</body>
</html>
