//display all students
<?php

//connect to DB 
require 'database.php';

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
		<title> Recruitment DB</title>
		<link rel="stylesheet" type="text/css" href="main.css">
	</head>
	<body>
		<h1> Students</h1>
		<!--display student table-->
		<table>
			<thead>
				<tr>
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
			</thead>
			<tbody>
				<!--query the DB and return info into an array with fetch all-->
				<!--loop thru array which is the result of query and display students-->
				<?php foreach ($students as $student) :?>
				<tr>
					<td><?php echo $student['studentID']; ?></td>
					<td><?php echo $student['lastName']; ?></td>
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
			</tbody>
		</table>
		<form action="add_student_form">
    <input type="submit" value="Add Student" />
</form>
		</body>
	</html>
