<?php
    require_once('./config/dbconfig.php');
    $db = new operations();
    $result=$db->view_student();

  
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/styles.css">
    <title>Student Management System</title>
</head>

<body class="bg-dark">

<?php 
  if(!isset($_SESSION["loggedin"])) {
    
    
  
  } else {

?>

<div class="container">
    <div class="row">
       <div class="col">
         <div class="card mt-5">
           <div class="card-header">
               <h2 class="text-center text-dark"> Students Record</h2>
               <a href="signup.php" id="btn-add" class="btn btn-success">Add Student</a>
           </div>
             <div calss="card-body">
             <?php
                    $db->display_message();
                    $db->display_message();
             ?>

                    <table id="students" class="table table-bordered">
                    <tr>
                      <td style="width: 10%"> ID </td>
                      <td style="width: 20%"> First Name </td>
                      <td style="width: 20%"> Last Name </td>
                      <td style="width: 20%"> Address </td>
                      <td style="width: 20%"> Phone No </td>
                      <td style="width: 20" colspan="2">Operations</td>

                    </tr>
                    <tr>
                       <?php
                          while($data = mysqli_fetch_assoc($result))
                          {
                        ?>
                          <td><?php echo $data['id'] ?></td>
                          <td><?php echo $data['firstname'] ?></td>
                          <td><?php echo $data['lastname'] ?></td>
                          <td><?php echo $data['address'] ?></td>
                          <td><?php echo $data['phoneno'] ?></td>
                          <td><a href="edit.php?U_id=<?php echo $data['id'] ?>" class="btn btn-success">Edit</a></td>
                          <td><a href="del.php?D_id=<?php echo $data['id'] ?>" class="btn btn-danger">Del</a></td>

                    </tr>
                    <?php
                       }
                       ?>
                    </table>

                    <?php 
    } ?>
                 </div>
           </div>
           </div>
        </div>
    </div>
    
</body>
</html>
