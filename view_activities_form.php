<?php
//connect to DB
require 'database.php';
require_once 'header.php';

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
		<h1>Activities</h1>
		<!--display activities table-->
		<table id = "myTable">
			<thead>
			<tr class = "header">
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
