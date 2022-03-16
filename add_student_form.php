<!DOCTYPE html>
<html>
	<head>
		<title> Recruitment DB</title>
		<link rel="stylesheet" type="text/css" href="main.css">
	</head>
	<body>
		<main>
			<h1> Add Student</h1>
			<form action="add_student.php" method="post" id="add_student_form">
			<label>Student ID:</label>
			<input type="input" name="studentID"/>
			</br>
			<label>Student Last Name:</label>
			<input type="input" name="lastName"/>
			</br>
			<label>Student First Name:</label>
			<input type="input" name="firstName"/>
			</br>
			<label>Student Jag Number:</label>
			<input type="input" name="jagNum"/>
			</br>
			<label>Student Birth Date:</label>
			<input type="input" name="birthdate"/>
			</br>
			<label>Student Phone Number:</label>
			<input type="input" name="phoneNum"/>
			</br>
			<label>Student Email:</label>
			<input type="input" name="email"/>
			</br>
			<label>Student Address:</label>
			<input type="input" name="address"/>
			</br>
			<label>Student City:</label>
			<input type="input" name="city"/>
			</br>
			<label>Student State:</label>
			<input type="input" name="state"/>
			</br>
			<label>Student Country:</label>
			<input type="input" name="country"/>
			</br>
			<label>Student ZIP Code:</label>
			<input type="input" name="zipCode"/>
			</br>
			<label>Student Status:</label>
			<input type="input" name="status"/>
			</br>
			<input type="submit" value="Add Student"/>
			</br>
			<p><a href="index.php"> Return to List of Students</a></p>
		</main>
	</body>
</html>
