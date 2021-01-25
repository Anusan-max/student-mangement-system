<?php
    require_once('./config/dbconfig.php');
    $db = new operations();
?>
<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="css/styles.css">
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<head>
    <title>Student Management System</title>
</head>
<body>
    <div id="register">
        <h3 class="text-center text-white pt-5">Register form</h3>

        <div class="container">
            <div id="register-row" class="row justify-content-center align-items-center">
                <div id="register-column" class="col-md-6">
                    <div id="register-box" class="col-md-12">
                        <form id="register-form" class="form" action="" method="post">
                            <h3 class="text-center text-info">Employee Register Form</h3>
                            <?php $db->Employee_Record(); ?>
                            <div class="form-group">
                                <label for="name" class="text-info">First Name:</label><br>
                                <input type="text" name="First" id="name" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="name" class="text-info">Last Name:</label><br>
                                <input type="text" name="Last" id="name" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="email" class="text-info">Email:</label><br>
                                <input type="Email" name="Email" id="email" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="password" class="text-info">Password:</label><br>
                                <input type="password" name="Password" id="password" class="form-control" required>
                            </div>
                            <div class="form-group">

                                <input type="submit" name="btn_register" class="btn btn-info btn-md" value="submit">

                            </div>

                            <div id="login-link" class="text-right">
                                <a href="index.php" class="text-info">login here</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
