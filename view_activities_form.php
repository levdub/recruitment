<?php
//connect to DB 
require 'database.php';

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
?>

<html>
	<head>
		<title> Recruitment DB</title>
		<link rel="stylesheet" type="text/css" href="main.css">
	</head>
	<body>
		<h1>Activities</h1>
		<!--display activities table-->
		<table>
			<thead>
			<tr>
					<th>Activity ID</th>
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
	</body>
</html>