<?php
//displays all students
//connect to DB
require 'database.php';
require_once 'header.php';

//write a query to retrieve all students
$query = 'SELECT * FROM students ORDER BY lastName';

//prepare SQL statement for execution, returning PDO statement object.
//data access in try catch block
try{
	$statement = $db->prepare($query);

//execute query
$statement->execute();

//retrieve data from data set
$students = $statement->fetchAll();

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
	<body>
		<div class="w3-sidebar  w3-theme-d2">
  <a href="view_student_form.php" class="w3-bar-item w3-button">Display Students</a>
  <a href="add_student_form.php" class="w3-bar-item w3-button">Add Student</a>
  <a href="edit_student_form.php" class="w3-bar-item w3-button">Edit Student</a>
  <a href="delete_student_form.php" class="w3-bar-item w3-button">Delete Student</a>
</div>
</body>
<div class="w3-cmain w3-border w3-round" style="margin-left:200px; height:600px; overflow: auto">


<body>
		<h2> Students</h2>
		<!--display student table-->
		<input type ="text" id= "myInput" onkeyup="myFunction()" placeholder ="Search Student Name...">
		<table id= "myTable">
			<tr class ="header">
					<th>Student ID</th>
					<th>Last Name</th>
					<th>First Name</th>
					<th>Jag Number</th>
					<th>Birth Date</th>
					<th>Phone Number</th>
					<th>Email</th>
					<th>City</th>
					<th>State</th>
					<th>Domestic</th>
					<th>Active</th>
					<th>Follow-Up Date</th>
					<th>Status</th>
					<th>Major</th>
					<th>School</th>
					<th>House Number</th>
					<th>Street Name</th>
					<th>Street Type</th>
					<th>ZIP</th>
					<th>GPA</th>
				</tr>
				<!--query the DB and return info into an array with fetch all-->
				<!--loop thru array which is the result of query and display students-->
				<?php foreach ($students as $student) :?>
				<tr>
					<td>
						<form name="profile" action="profile.php">
							<input type='hidden' id = 'profiled' name='display' value=<?php echo$student['studentID']; ?> >
							<input type="submit" value="View" placeholder="view" class="w3-btn w3-theme-d1 w3-round"/>
					</form>
				</td>
					<td><?php echo$student['lastName'] ?></td>
					<td><?php echo $student['firstName']; ?></td>
					<td><?php echo $student['jagNum']; ?></td>
					<td><?php echo $student['birthdate']; ?></td>
					<td><?php echo $student['phoneNum']; ?></td>
					<td><?php echo $student['email']; ?></td>
					<td><?php echo $student['city']; ?></td>
					<td><?php echo $student['state']; ?></td>
					<td><?php echo $student['domestic']; ?></td>
					<td><?php echo $student['active']; ?></td>
					<td><?php echo $student['followupDate']; ?></td>
					<td><?php echo $student['status']; ?></td>
					<td><?php echo $student['major']; ?></td>
					<td><?php echo $student['school']; ?></td>
					<td><?php echo $student['houseNumber']; ?></td>
					<td><?php echo $student['streetName']; ?></td>
					<td><?php echo $student['streetType']; ?></td>
					<td><?php echo $student['zip']; ?></td>
					<td><?php echo $student['GPA']; ?></td>

				</tr>
				<?php endforeach; ?>
		</table>
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
		<form action="add_student_form.php">
    <input type="submit" value="Add Student" />
</form>
		</body>
	</div>
</div>
	</html>
