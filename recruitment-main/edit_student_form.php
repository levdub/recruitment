<!-- this is the sidebar menu page -->
<?php
require_once 'header.php';
?>
<body>
<header>
  <nav class="w3-sidebar  w3-theme-d2" style="overflow:auto">
    <a href="view_student_form.php" class="w3-bar-item w3-button">Display Students</a>
    <a href="add_student_form.php" class="w3-bar-item w3-button">Add Student</a>
    <a href="edit_student_form.php" class="w3-bar-item w3-button">Edit Student</a>
    <a href="delete_student_form.php" class="w3-bar-item w3-button">Delete Student</a>
</header>
</body>
<div class=" w3-container w3-quarter w3-border w3-round-xlarge w3-light-gray" style ="margin-left:205px;width: 400px;overflow:auto" >
<div class="w3-twothird">

  <form action = "search.php" method= "GET" class"w3-container">

    <input type="text" name="q" placeholder="Search Student" class="w3-input w3-border"/>

  <input type="submit" class="w3-btn w3-red w3-round" value="search" placeholder="Search"/>
</form>
</div>
</div>
