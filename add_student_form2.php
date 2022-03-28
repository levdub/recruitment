<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Create Student</title>
    <link rel="stylesheet" href="main.css">
    <style type="text/css">
        .wrapper{
            width: 500px;
            margin: 0 auto;
        }
    </style>
</head>
<body>
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
                            <input type="text" name="status" class="form-control">
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
                            <label>Active?</label>
                            <input type="checkbox" name="active" value="1" class="form-control">
                        </div>
						<div class="form-group">
                            <label>Domestic?</label>
                            <input type="checkbox" name="domestic" value="1" class="form-control">
                        </div>
                        <input type="submit" class="btn btn-primary" name="submit" value="Submit">
                    </form>
                </div>
            </div>        
        </div>
    </div>
</body>
</html>
