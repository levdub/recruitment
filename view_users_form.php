<?php
//connect to DB 
require 'database.php';

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