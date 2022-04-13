<?php
//connect to DB
require 'database.php';
require 'database.php';
require_once 'header.php';

//write a query to retrieve all users
$query = 'SELECT * FROM users ORDER BY username';

//prepare SQL statement for execution, returning PDO statement object.
//data access in try catch block
try{
	$statement = $db->prepare($query);

//execute query
$statement->execute();

//retrieve data from data set
$users = $statement->fetchAll();

//close connection
$statement->closeCursor();
} catch (Exception $e) {
	$error_message->getMessage();
	echo "Error Message " . $error_message;
}
?>

<html>
<head>
	<style>
	.flex-container {
		display: flex;
		flex-wrap: nowrap;
	}
	* {
  box-sizing: border-box;
}

	 #myInput {
	  background-position: 10px 12px; /* Position the search icon */
	  background-repeat: no-repeat; /* Do not repeat the icon image */
	  width: 100%; /* Full-width */
	  font-size: 16px; /* Increase font-size */
	  padding: 12px 20px 12px 40px; /* Add some padding */
	  border: 1px solid #ddd; /* Add a grey border */
	  margin-bottom: 12px; /* Add some space below the input */
	}

	#myTable {
	  border-collapse: collapse; /* Collapse borders */
	  width: 100%; /* Full-width */
	  border: 1px solid #ddd; /* Add a grey border */
	  font-size: 18px; /* Increase font-size */

	}

	#myTable th, #myTable td {
	  text-align: left; /* Left-align text */
	  padding: 12px; /* Add padding */
	}

	#myTable tr {
	  /* Add a bottom border to all table rows */
	  border-bottom: 1px solid #ddd;
	}

	#myTable tr.header {
	  /* Add a grey background color to the table header and on hover */
	  background-color: #204881 ;
		color: white;
	}

	</style>

		<title> Recruitment DB</title>

</head>

	<div class="w3-cmain w3-border w3-round" style="overflow: auto">	
<body>
	<h2> Users </h2>
         <!-- This button sends user to the add user form -->
		<form action="add_admin_form.php">
			<button class="btn"><i class="fa fa-plus"></i></button> <p2> Add User <p2>
		</form>
		<!--display student table-->
		<input type ="text" id= "myInput" onkeyup="myFunction()" placeholder ="Search Users Name...">
		


		<table id="myTable">
			<thead>
				<tr class="header">
					<th>UserID</th>
					<th>Firstname</th>
					<th>Lastname</th>
					<th>Username</th>
					<th>Email</th>
					<th>Password</th>
				<!-- password should never be displayed anywhere. Im using it here just to show it. -->
					<th>Admin</th>
				</tr>
			</thead>
			<tbody>
				<!--query the DB and return info into an array with fetch all-->
				<!--loop thru array which is the result of query and display communications-->
				<?php foreach ($users as $user) :?>
				<tr>	
					<td>
						<div class="flex-container">

						<form name="profile" id="profile" action="profile.php">
							<input type='hidden' id = 'profile' name='display' value=<?php echo$user['userID']; ?>/>
							<button class="btn"><i class="fa fa-eye"></i></button>
						</form>
						<form action="edit.php" method="GET">
							<input type='hidden' id = 'searched' name='searched' value=<?php echo$student['studentID']; ?> >
							<button class="btn"><i class="fa fa-edit"></i></button>
						</form>
						<div class= "w3-container w3-round w3-light-gray" style= "border-style:solid; border-color: black; border-width: 2px">
					<a href="delete.php?delete=<?php echo $student['studentID']; ?>"
						onclick="return confirm('Are You Sure ?'); "><i class="fa fa-trash-o"></i></a>
					</div>
					</div>
				</td>
					<td><?php echo $user['userID']; ?></td>
					<td><?php echo $user['firstName']; ?></td>
					<td><?php echo $user['lastName']; ?></td>
					<td><?php echo $user['username']; ?></td>
					<td><?php echo $user['email']; ?></td>
					<td><?php echo $user['password']; ?></td>
					<td><?php echo $user['privledgedRights']; ?></td>
				</tr>
				<?php endforeach; ?>
			</tbody>
		</table>

<!-- funtionality for the search bar -->
<script>
	function myFunction() {
  	var input, filter, table, tr, td, i, txtValue;
  	input = document.getElementById("myInput");
  	filter = input.value.toUpperCase();
  	table = document.getElementById("myTable");
  	tr = table.getElementsByTagName("tr");
  	for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[1,2];
    	if (td) {
      	txtValue = td.textContent || td.innerText;
      	if (txtValue.toUpperCase().indexOf(filter) > -1) {
        	tr[i].style.display = "";
      	} else {
        	tr[i].style.display = "none";
      	}
    }
  }
}
</script>
</body>