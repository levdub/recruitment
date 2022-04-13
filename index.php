

<?php
//*THIS IS OUTPUT FOR ACTIVITIES COMMS AND STUDENTS PAGE

//connect to DB
require 'database.php';
require_once 'header.php';
//----------------------------------------------------------------------------
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
//-----------------------------------------------------------------------------------
//write a query to retrieve all activities
$query = 'SELECT * FROM activities ORDER BY activityName';

//prepare SQL statement for execution, returning PDO statement object.
//data access in try catch block
try{
	$statement = $db->prepare($query);

//execute query
$statement->execute();

//retrieve data from data set
$activities = $statement->fetchAll();

//close connection
$statement->closeCursor();
} catch (Exception $e) {
	$error_message->getMessage();
	echo "Error Message " . $error_message;
}
//-------------------------------------------------------------------------------------
//write a query to retrieve all communications
$query = 'SELECT * FROM communications ORDER BY studentID';

//prepare SQL statement for execution, returning PDO statement object.
//data access in try catch block
try{
	$statement = $db->prepare($query);

//execute query
$statement->execute();

//retrieve data from data set
$communications = $statement->fetchAll();

//close connection
$statement->closeCursor();
} catch (Exception $e) {
	$error_message->getMessage();
	echo "Error Message " . $error_message;
}
//-------------------------------------------------------------------------------------
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
					<td><?php echo $student['GPA']; ?></td>

				</tr>
				<?php endforeach; ?>
			</tbody>
		</table>

<!-- /////////////////////////////////////////////////////////////////////////// --!>
		<h1> Activities</h1>
		<!--display activities table-->
		<table>
			<thead>
				<tr>
					<th>activityID</th>
					<th>Name</th>
					<th>Description</th>
					<th>Date</th>
				</tr>
			</thead>
			<tbody>
				<!--query the DB and return info into an array with fetch all-->
				<!--loop thru array which is the result of query and display activities-->
				<?php foreach ($activities as $activity) :?>
				<tr>
					<td><?php echo $activity['activityID']; ?></td>
					<td><?php echo $activity['activityName']; ?></td>
					<td><?php echo $activity['activityDesc']; ?></td>
					<td><?php echo $activity['activityDate']; ?></td>
				</tr>
				<?php endforeach; ?>
			</tbody>
		</table>

<!-- /////////////////////////////////////////////////////////////////////////// --!>
		<h1> Communications</h1>
		<!--display communications table-->
		<table>
			<thead>
				<tr>
					<th>Communication ID</th>
					<th>Activity ID</th>
					<th>User ID</th>
					<th>Student ID</th>
				</tr>
			</thead>
			<tbody>
				<!--query the DB and return info into an array with fetch all-->
				<!--loop thru array which is the result of query and display communications-->
				<?php foreach ($communications as $comm) :?>
				<tr>
					<td><?php echo $comm['commID']; ?></td>
					<td><?php echo $comm['activityID']; ?></td>
					<td><?php echo $comm['usersID']; ?></td>
					<td><?php echo $comm['studentID']; ?></td>
				</tr>
				<?php endforeach; ?>
			</tbody>
		</table>
<!-- /////////////////////////////////////////////////////////////////////////// --!>
		<h1> Users</h1>
		<!--display users table-->
		<table>
			<thead>
				<tr>
					<th>UserID</th>
					<th>Username</th>
					<th>Email</th>
					<th>Password</th>
				<!-- password should never be displayed anywhere. Im using it here just to show it. --!>
					<th>Admin</th>
				</tr>
			</thead>
			<tbody>
				<!--query the DB and return info into an array with fetch all-->
				<!--loop thru array which is the result of query and display communications-->
				<?php foreach ($users as $user) :?>
				<tr>
					<td><?php echo $user['userID']; ?></td>
					<td><?php echo $user['username']; ?></td>
					<td><?php echo $user['email']; ?></td>
					<td><?php echo $user['password']; ?></td>
					<td><?php echo $user['privledgedRights']; ?></td>
				</tr>
				<?php endforeach; ?>
			</tbody>
		</table>

		<p><a href="add_student_form.php"> Add Student</a></p>
	</body>
</html>
