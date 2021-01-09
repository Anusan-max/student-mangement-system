<?php
    require_once('./config/dbconfig.php');
    $db = new operations();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.css">
    <title>Student Management System</title>
</head>
<body class="bg-dark">

    <div class="container">
        <div class="row">
            <div class="col-lg-6 m-auto">
                <div class="card mt-5">
                    <div class="card-header">
                        <h2> Login Form </h2>
                    </div>
                        <?php $db->login(); ?>
                        <div class="card-body">
                            <form method="POST">
                              <input type="Email" name="Email" placeholder=" Email Address" class="form-control mb-2" required>
                              <input type="password" name="Password" placeholder=" Password" class="form-control mb-2" required>
                        </div>
                    <div class="card-footer">
                            <button class="btn btn-success" name="btn_login"> Login </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
