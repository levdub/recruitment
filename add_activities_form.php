<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Create Activity</title>
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
                    <form action="activitydb.php" method="post">
                        <div class="form-group">
                            <label>Activity Name</label>
                            <input type="text" name="name" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Activity Description</label>
                            <input type="text" name="description" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Activity Date</label>
                            <input type="date" name="date" class="form-control">
                        </div>
						<div class="form-group">
                            <label>comment</label>
                            <input type="text" name="comment" class="form-control">
                        </div>
                        <input type="submit" class="btn btn-primary" name="submit" value="Submit">
                    </form>
                </div>
            </div>        
        </div>
    </div>
</body>
</html>
