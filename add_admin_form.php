<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Create Admin</title>
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
                        <h2>Contact Form</h2>
                    </div>
                    <p>Please fill this form and submit to add employee record to the database.</p>
                    <form action="add_admin.php" method="post">
                        <div class="form-group">
                            <label>User Name</label>
                            <input type="text" name="name" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" name="email" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" name="password" class="form-control">
                        </div>
						<div class="form-group">
                            <label>First name</label>
                            <input type="text" name="fname" class="form-control">
                        </div>
						<div class="form-group">
                            <label>Last name</label>
                            <input type="text" name="lname" class="form-control">
                        </div>
						<div class="form-group">
                            <label>Jag number</label>
                            <input type="text" name="jnum" class="form-control">
                        </div>
						<div class="form-group">
                            <label>Admin?</label>
                            <input type="checkbox" name="admin" value="1" class="form-control">
                        </div>
                        <input type="submit" class="btn btn-primary" name="submit" value="Submit">
                    </form>
                </div>
            </div>        
        </div>
    </div>
</body>
</html>
