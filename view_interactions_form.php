<?php
//connect to DB
require 'database.php';
require_once 'header.php';

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
?>
<html>
<body>
<h1>Interactions</h1>
		<!--display interactions table-->
		<table>
			<thead>
				<tr>
					<th>Interaction ID</th>
					<th>Activity ID</th>
					<th>User ID</th>
					<th>Student ID</th>
					<th>Comments</th>
					<th>Date</th>

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
					<td><?php echo $comm['comments']; ?></td>
					<td><?php echo $comm['date']; ?></td>
				</tr>
				<?php endforeach; ?>
			</tbody>
		</table>
		</body>
		</html>
