<?php
include_once 'db.php';
require 'database.php';
require_once 'header.php';

if(isset($_GET['addinteraction']) && $_GET['addinteraction'] != ""){
  $id = (INT)$_GET['addinteraction'];
  $sql = "SELECT * FROM students WHERE studentID = '$id'";
  $result = mysqli_query($conn, $sql);
  if (mysqli_num_rows($result) == 0) {
      echo "Error Student Not Found";
    }

    $row = mysqli_fetch_assoc($result);
    $idstu = $row['studentID'];
    $phone = $row['phoneNum'];
    $email = $row['email'];
    $fname = $row['firstName'];
    $lname = $row['lastName'];
    $c = $fname." ".$lname;
}else{
  echo "Invalid ID specified";

}


if(isset($_POST['submit']))
{

}

  ?>
  <style>
html, body, h1, h2, h3, h4, h5 {font-family: "Open Sans", sans-serif}
</style>
<body style="background: url(images/bluebackground.jpg); background-size:cover; background-repeat: no-repeat;"
<div>
<button class="w3-left" onclick="history.back()"><<< Go Back</button>
</div>
  <div class="w3-container" style="width:900px; margin-left:500px">

      <h5 style="color:white; text-align: center">Add Interation form</h5>
      <div class="w3-card w3-round w3-light-gray w3-padding-large w3-padding-32">
        <div class="w3-container w3-red -w3-border w3-round" style="opacity: 0.9">
        <h4 class="w3-center" style= "font-size: 40px"><?php echo $c;?></h4>
      </div>
        <hr>
        <div class="w3-row" style ="height: 200px">
        <div class="w3-col m3">
         <p> Activity: </p>
         <div class="form-group">
         <?php
         $sql="SELECT activityName FROM activities";
         $result = mysqli_query($conn, $sql);
         $datas = array();
         if (mysqli_num_rows($result) >0){
           while($row = mysqli_fetch_array($result)){
             $datas[] = $row['activityName'];
           }
         }

         echo " <select id= 'activity'>";
         echo "<option value=''>Select</option";

         foreach($datas as $row2) {

           echo "<option value='$row2'>$row2</option>";
         }
            echo "</select>";

          ?>
        </div>
        	<div class="form-group">
              <label></label>
              <input type="hidden" name="name" value="<?php echo $c; ?>">
              <input type="hidden" name="id" value="<?php echo $idstu; ?>">
              <p class=" w3-margin-right w3-text-theme"> Current Date :
              <input type="date" name="date" class="form-control">
              </p>
          </div>
              <div class="form-group">
                <p class=" w3-margin-right w3-text-theme"> Set Follow-Up Date:
                <input type="date" name="followupDate" class="form-control">
                </p>
            </div>
        </div>

        <div class="w3-col m7">
          	<div class="form-group">
          <label>Comments: </label>
        </p>
          <textarea name="comment"placeholder="Enter comment Notes..."style="height: 180px; resize: none; width: 500px; overflow:auto"></textarea>
        </div>
        </div>
        <div class="w3-right">
         <input type="submit" class="w3-btn w3-red" name="submit" value="Submit" />
       </div>
      </div>
    </div>
  </div>
