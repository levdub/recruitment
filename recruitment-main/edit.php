<<?php
require 'db.php';
require_once 'edit_student_form.php';

  $id = (INT)$_GET['searched'];

$sql = "SELECT * FROM students WHERE studentID = '$id'";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) == 0) {
    echo "Error Student Not Found";
  }

  $row = mysqli_fetch_assoc($result);
  $id = $row['studentID'];
  $phone = $row['phoneNum'];
  $email = $row['email'];
  $fname = $row['firstName'];
  $lname = $row['lastName'];
  $jnum = $row['jagNum'];
  $gpa = $row['GPA'];
  $major = $row['major'];
  $school = $row['school'];
  $status = $row['status'];
  $term = $row['term'];
  $house = $row['houseNumber'];
  $street = $row['streetName'];
  $streetType = $row['streetType'];
  $city = $row['city'];
  $state = $row['state'];
  $zip = $row['zip'];
  $bday = $row['birthdate'];
  $followup = $row['followupDate'];
  $active = $row['active'];
  $domestic = $row['domestic'];

  if (isset($_POST['upd'])) {
    $id = $_POST['id'];
    $phone = mysqli_real_escape_string($conn, $_POST['phone']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $fname = mysqli_real_escape_string($conn, $_POST['firstname']);
    $lname = mysqli_real_escape_string($conn, $_POST['lastname']);
    $jnum = mysqli_real_escape_string($conn, $_POST['jnum']);
    $gpa = mysqli_real_escape_string($conn, $_POST['gpa']);
    $major = mysqli_real_escape_string($conn, $_POST['major']);
    $school = mysqli_real_escape_string($conn, $_POST['school']);
    $status = mysqli_real_escape_string($conn, $_POST['Status']);
    $term = mysqli_real_escape_string($conn, $_POST['term']);
    $house = mysqli_real_escape_string($conn, $_POST['house']);
    $street = mysqli_real_escape_string($conn, $_POST['street']);
    $streetType = mysqli_real_escape_string($conn, $_POST['streetType']);
    $city = mysqli_real_escape_string($conn, $_POST['city']);
    $state = mysqli_real_escape_string($conn, $_POST['state']);
    $zip = mysqli_real_escape_string($conn, $_POST['zip']);
    $bday = mysqli_real_escape_string($conn, $_POST['bday']);
    $Birthdate = date("Y-m-d",strtotime($bday));
    $followup = mysqli_real_escape_string($conn, $_POST['followup']);
    $FollowDate = date("Y-m-d",strtotime($followup));
    $active = $_POST['Active'];
    $domestic = mysqli_real_escape_string($conn, $_POST['Area']);

    $sql2 = "UPDATE students SET phoneNum = '$phone', email = '$email', firstName = '$fname', lastName = '$lname',jagNum  = '$jnum', GPA = '$gpa',major  = '$major', school = '$school',status  = '$status', term = '$term',houseNumber  = '$house',
    streetName = 'street', streetType = '$streetType', city = '$city', state = '$state', zip = '$zip', birthdate = '$Birthdate', followupDate = '$FollowDate', active = '$active', domestic = '$domestic' WHERE studentID = $id";
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
            <h2>Edit <?php echo $fname; ?></h2>
        </div>
     <form action="" method="POST" class="w3-container">
         <input type="hidden" name="id" value="<?php echo $id; ?>">
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
             <label>Phone</label>
             <input type="text" class="w3-input w3-border" name="phone" value="<?php echo $phone; ?>">
         <p>
           <p>
               <label>Jagnumber</label>
               <input type="text" class="w3-input w3-border" name="jnum" value="<?php echo $jnum; ?>">
           <p>
         <p>
             <label>GPA</label>
             <input type="text" class="w3-input w3-border" name="gpa" value="<?php echo $gpa; ?>">
         <p>
         <p>
             <label>Major</label>
             <input type="text" class="w3-input w3-border" name="major" value="<?php echo $major; ?>">
         <p>
         <p>
             <label>School</label>
             <input type="text" class="w3-input w3-border" name="school" value="<?php echo $school; ?>">
         <p>
         <p>
             <label>Status</label>
             <select name="Status" id="status">
             <option value = "Active">Active</option>
             <option value = "Applied">Applied</option>
             <option value = "Inactive">Inactive</option>
             <option value = "Not Intrested">Not Intrested</option>
           </select>
         <p>
         <p>
             <label>Term</label>
             <input type="text" class="w3-input w3-border" name="term" value="<?php echo $term; ?>">
         <p>
         <p>
             <label>Address Number</label>
             <input type="text" class="w3-input w3-border" name="house" value="<?php echo $house; ?>">
         <p>
           <p>
               <label>Street</label>
               <input type="text" class="w3-input w3-border" name="street" value="<?php echo $street; ?>">
           <p>
         <p>
             <label>StreetType</label>
             <input type="text" class="w3-input w3-border" name="streetType" value="<?php echo $streetType; ?>">
         <p>
         <p>
             <label>City</label>
             <input type="text" class="w3-input w3-border" name="city" value="<?php echo $city; ?>">
         <p>
         <p>
             <label>State</label>
             <input type="text" class="w3-input w3-border" name="state" value="<?php echo $state; ?>">
         <p>
         <p>
             <label>Zip</label>
             <input type="text" class="w3-input w3-border" name="zip" value="<?php echo $zip; ?>">
         <p>
         <p>
             <label>Date Of Birth</label>
             <input type="date" name="bday" class="form-control" value="<?php echo $bday; ?>">
         <p>
         <p>
             <label>Follow UP</label>
             <input type="date" name="followup" class="form-control" value="<?php echo $followup; ?>">
         <p>
         <p>
             <label>Active:</label></p>
              <label for="">Active:</label></p>
           <div class ="form-group">
             <input type="radio" name="Active" value="yes" /> Yes
             <input type="radio" name="Active" value="no" /> No
           </div>
         <p>
         <p>
             <label>Country Area</label>
             <select name="Area" id="area">
             <option value = "Domestic Student">Domestic</option>
             <option value = "International Student">International</option>
           </select>
         <p>
         <p>
             <input type="submit" class="w3-btn w3-red w3-round" name="upd" value="Save edit">
         </p>
       </div>
      </div>
    </div>
  </form>
