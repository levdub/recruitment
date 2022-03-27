<?php
include_once 'db.php';
if(isset($_POST['submit']))
{    
     $name = $_POST['name'];
     $email = $_POST['email'];
     $password = $_POST['password'];
	 $fname = $_POST['fname'];
	 $lname = $_POST['lname'];
	 $jnum = $_POST['jnum'];
	 $admin = $_POST['admin'];
     $sql = "INSERT INTO users (username,email,password,firstName,lastName,jnum,privledgedRights)
     VALUES ('$name','$email','$password','$fname','$lname','$jnum','$admin')";
     if (mysqli_query($conn, $sql)) {
        echo "New record has been added successfully !";
     } else {
        echo "Error: " . $sql . ":-" . mysqli_error($conn);
     }
     mysqli_close($conn);
}
?>
