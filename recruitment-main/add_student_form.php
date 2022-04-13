<!DOCTYPE html>
<?php
require 'database.php';
require_once 'header.php';
require 'add_student.php';
 ?>
<html>
	<head>
		<title> Recruitment DB</title>
		<link rel="stylesheet" type="text/css" href="main.css">
	</head>
	<body>
		<div class="w3-sidebar  w3-theme-d2">
			<a href="view_student_form.php" class="w3-bar-item w3-button">Display Students</a>
		  <a href="add_student_form.php" class="w3-bar-item w3-button">Add Student</a>
		  <a href="edit_student_form.php" class="w3-bar-item w3-button">Edit Student</a>
		  <a href="delete_student_form.php" class="w3-bar-item w3-button">Delete Student</a>
</div>
</body>
<div class="w3-content w3-margin-top" style="max-width:1400px;">

<div class="w3-twothird">
		<main>
			<div class="wrapper">
			        <div class="container-fluid">
			            <div class="row">
			                <div class="col-md-12">
			                    <div class="page-header">
			                        <h2>Student Form</h2>
			                    </div>
			                    <p>Please fill this form and submit to add student record to the database.</p>
			                    <form action="add_student.php" method="post">
									<div class="form-group">
			                            <label>First Name:</label>
			                            <input type="text" name="fname" class="form-control">
			                        </div>
									<div class="form-group">
			                            <label>Last Name:</label>
			                            <input type="text" name="lname" class="form-control">
			                        </div>
									<div class="form-group">
			                            <label>Email:</label>
			                            <input type="email" name="email" class="form-control">
			                        </div>
									<div class="form-group">
			                            <label>Phone Number:</label>
			                            <input type="text" name="phone" class="form-control">
			                        </div>
									<div class="form-group">
			                            <label>Jag Number:</label>
			                            <input type="text" name="jnum" class="form-control">
			                        </div>
									<div class="form-group">
			                            <label>GPA:</label>
			                            <input type="text" name="gpa" class="form-control">
			                        </div>
									<div class="form-group">
			                            <label>Major:</label>
			                            <input type="text" name="major" class="form-control">
			                        </div>
									<div class="form-group">
			                            <label>School:</label>
			                            <input type="text" name="school" class="form-control">
			                        </div>
									<div class="form-group">
			                            <label>Status:</label>
                                  <select name="Status" id="status">
                                  <option value = "Active">Active</option>
                                  <option value = "Applied">Applied</option>
                                  <option value = "Inactive">Inactive</option>
                                  <option value = "Not Intrested">Not Intrested</option>
                                </select>
			                        </div>
									<div class="form-group">
			                            <label>Expected Term:</label>
			                            <input type="text" name="term" class="form-control">
			                        </div>
									<div class="form-group">
			                            <label>House Number:</label>
			                            <input type="text" name="house" class="form-control">
			                        </div>
									<div class="form-group">
			                            <label>Street:</label>
			                            <input type="text" name="street" class="form-control">
			                        </div>
									<div class="form-group">
			                            <label>Street Type:</label>
			                            <input type="text" name="streetType" class="form-control">
			                        </div>
									<div class="form-group">
			                            <label>City:</label>
			                            <input type="text" name="city" class="form-control">
			                        </div>
									<div class="form-group">
			                            <label>State:</label>
			                            <input type="text" name="state" class="form-control">
			                        </div>
									<div class="form-group">
			                            <label>Zip:</label>
			                            <input type="text" name="zip" class="form-control">
			                        </div>
									<div class="form-group">
			                            <label>Birthdate:</label>
			                            <input type="date" name="bday" class="form-control">
			                        </div>
									<div class="form-group">
			                            <label>Next follow-up?</label>
			                            <input type="date" name="followup" class="form-control">
			                        </div>
									<div class="form-group">
                                    <label for="">Active:</label></p>
                                    <div class ="form-group">
                                   <input type="radio" name="Active" value="yes" /> Yes
                                   <input type="radio" name="Active" value="no" /> No
                                   </div>
			                        </div>
									<div class="form-group">
                                    <label>Country Area</label>
                                    <select name="Area" id="area">
                                    <option value = "Domestic Student">Domestic</option>
                                    <option value = "International Student">International</option>
                                    </select>
			                        </div>
			                        <input type="submit" class="btn btn-primary" name="submit" value="Submit">
			                    </form>
			                </div>
			            </div>
			        </div>
			    </div>

		</main>
	</body>
</div>
</div>
</html>
