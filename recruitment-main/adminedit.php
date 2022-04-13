<<?php
require 'db.php';
require_once 'edit_admin_form.php';

  $id = (INT)$_GET['searched'];

$sql = "SELECT * FROM users WHERE userID = '$id'";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) == 0) {
    echo "Error Student Not Found";
  }

  $row = mysqli_fetch_assoc($result);
  $id = $row['userID'];
  $username = $row['username'];
  $password = $row['password'];
  $email = $row['email'];
  $privledgedRights = $row['privledgedRights'];
  $jnum = $row['jnum'];
  $fristName = $row['firstname'];
  $lastName = $row['lastName'];
  

  if (isset($_POST['upd'])) {
    $id = $_POST['id'];
    $firstName = mysqli_real_escape_string($conn, $_POST['firstname']);
    $lastName = mysqli_real_escape_string($conn, $_POST['lastname']);
    $jnum = mysqli_real_escape_string($conn, $_POST['jnum']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $privledgedRights = mysqli_real_escape_string($conn, $_POST['privledgedRights']);


    $sql2 = "UPDATE users SET email = '$email', firstName = '$firstName', lastName = '$lastName', jagNum  = '$jnum', privledgedRights = '$privledgedRights'  WHERE userID = $id";
   if (mysqli_query($conn, $sql2)) {
         echo '<meta http-equiv="refresh" content="0">';
     } else {
          echo "failed to edit." . mysqli_connect_error();
        }
}
  ?>

  <div class="w3-main w3-border w3-round" style="margin-left:800px; height:600px; overflow: auto">
  <div class="w3-container">
    <div class="w3-card-4">
      <div class="w3-container w3-red">
            <h2>Edit <?php echo $firstName; ?></h2>
        </div>
     <form action="" method="POST" class="w3-container">
         <input type="hidden" name="id" value="<?php echo $id; ?>"
         <p>
             <label>First Name</label>
             <input type="text" class="w3-input w3-border" name="firstname" value="<?php echo $fname; ?>">
         <p>
           <p>
               <label>Last Name</label>
               <input type="text" class="w3-input w3-border" name="lastname" value="<?php echo $lname; ?>">
           <p>
         <p>
             <label>Email</label>
             <input type="text" class="w3-input w3-border" name="email" value="<?php echo $email; ?>">
         </p>
           <p>
               <label>Jagnumber</label>
               <input type="text" class="w3-input w3-border" name="jnum" value="<?php echo $jnum; ?>">
           <p>
         <p>
             <p>
                <label>Admin?</label>
                <input type="checkbox" class="w3-input w3-border" name="privledgedRights" value="<?php echo $privlegedRights; ?>" >
             <p>
         <p>
             <input type="submit" class="w3-btn w3-red w3-round" name="upd" value="Save edit">
         </p>
       </div>
      </div>
    </div>
  </form>
