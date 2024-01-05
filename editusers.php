<html>
<body>

    <!-- updateuser.php -->
    <?php
        include("connection.php");

        echo "Entered edit page";

        
            $Uid = $_POST['Uid'];
            $Fullname = $_POST['Fullname'];
            $Email = $_POST['Email'];
            $Mobno = $_POST['Mobno'];

            echo $Uid;
            echo $Fullname;
            echo $Email;
            echo $Mobno;

    
            /*
            // Update user information in the database
            $update_query = "UPDATE userdetails SET Fullname='$Fullname', Email='$Email', Mobile_no='$Mobile_no' WHERE uid='$uid'";
            $result = mysqli_query($conn, $update_query);
        
            // updated result
            if ($result) {
                echo "User information updated successfully!";
            } else {
                echo "Error updating user information: " . mysqli_error($conn);

            }*/

        ?>

        <form method="Post" action="viewedituser.php" enctype='multipart/form-data'>
        <input type='hidden' name='Uid' value="<?php echo $Uid;?>">
        <input type="text" id="Fullname" name="Fullname"> 
        <input type="text" id="Email" name="Email"> 
        <input type="text" id="Mobno" name="Mobno"> 
        <input type="submit" value="Save" name="submit">
            
        </form>
</body>
</html>