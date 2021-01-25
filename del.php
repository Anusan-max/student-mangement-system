<?php


require_once('./config/dbconfig.php');
$db = new operations();

if(isset($_GET['D_id']))
{
    global $db;
    $id = $_GET['D_id'];

    if($db->Delete_Record($id))
    {
       $db-> set_message('<div class="alert alert-danger"> Student Record Has Been Deleted </div>');
       header("location:view.php");
    }
    else
    {
        $db-> set_message('<div class="alert alert-danger"> Something Wrong to Delete the Record </div>');
    }
}
?>
