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
                            <h3 class="text-center text-info">Student Register Form</h3>
                            <?php $db->Store_Record(); ?>
                            <div class="form-group">
                                <label for="name" class="text-info">First Name:</label><br>
                                <input type="text" name="First" id="name" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="name" class="text-info">Last Name:</label><br>
                                <input type="text" name="Last" id="name" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="address" class="text-info">Address:</label><br>
                                <input type="text" name="Address" id="address" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="phone" class="text-info">Phone No:</label><br>
                                <input type="text" name="Phone" id="phone" class="form-control" required>
                            </div>
                            <div class="form-group">

                                <input type="submit" name="btn_save" class="btn btn-info btn-md" value="submit">

                            </div>


                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
