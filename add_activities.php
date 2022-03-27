<?php
include_once 'db.php';
if(isset($_POST['submit']))
{    
     $name = $_POST['name'];
     $description = $_POST['description'];
     $date = $_POST['date'];
	 $comment = $_POST['comment'];
     $sql = "INSERT INTO activities (activityName,activityDesc,activityDate,comment)
     VALUES ('$name','$description','$date','$comment')";
     if (mysqli_query($conn, $sql)) {
        echo "New record has been added successfully !";
     } else {
        echo "Error: " . $sql . ":-" . mysqli_error($conn);
     }
     mysqli_close($conn);
}
?>
