
<?php
require_once 'header.php';
?>
<body>
<header>
  <nav class="w3-sidebar  w3-theme-d2" style="overflow:auto">
    <a href="view_user_form.php" class="w3-bar-item w3-button">Display User</a>
    <a href="add_user_form.php" class="w3-bar-item w3-button">Add User</a>
    <a href="edit_user_form.php" class="w3-bar-item w3-button">Edit User</a>
    <a href="delete_user_form.php" class="w3-bar-item w3-button">Delete User</a>
</header>
</body>
<div class=" w3-container w3-quarter w3-border w3-round-xlarge w3-light-gray" style ="margin-left:205px;width: 400px;overflow:auto" >
<div class="w3-twothird">

  <form action = "search.php" method= "GET" class"w3-container">

    <input type="text" name="q" placeholder="Search Users" class="w3-input w3-border"/>

  <input type="submit" class="w3-btn w3-red w3-round" value="search" placeholder="Search"/>
</form>
</div>
</div>