<?php
//this is a comment in php
require 'database.php';
if(!empty($_SESSION["id"])){
  header("Location: index.php");
}
 if(isset($_POST["submit"])){
   $usernameemail = $_POST["username"];
   $password = $_POST["password"];
   $result = mysqli_query($conn, "SELECT * FROM recruitment WHERE username = '$usernameemail' OR email = '$usernameemail'");
   $row = mysqli_fetch_assoc($result);
   if (mysqli_num_rows($result) > 0){
     if ($password == $row['password']){
       $_SESSION["login"] = true;
       $_SESSION["id"] = $row["id"];
       header("Location: index.php");
   }
   else{
     echo
     "<script> alert('Wrong Password'); </script>";
   }
 }
 else{
   echo
   "<script> alert('user Not Registered'); </script>";
 }
}
 ?>

<html>
<head>
