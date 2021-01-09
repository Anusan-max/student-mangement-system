
<?php


require_once('./config/dbconfig.php');

// creating a new object for dbconfig
$db = new dbconfig();


class operations extends dbconfig
{
    // Insert Record in the Database
    public function Store_Record()
    {
        global $db;
        if(isset($_POST['btn_save']))
        {
            // assign value from the html form input to variable
            $FirstName = $db->check($_POST['First']);
            $LastName = $db->check($_POST['Last']);
            $Address = $db->check($_POST['Address']);
            $Phone = $db->check($_POST['Phone']);


            // calling inser_record method and passing the variables

            if($this->insert_record($FirstName,$LastName,$Address,$Phone))
            {
                echo '<div class="alert alert-success"> Your Record Has Been Saved :) </div>';
            }
            else
            {
                echo '<div class="alert alert-danger"> Failed </div>';
            }
        }
    }


  // Insert Record in the Database Using Query
  // method declare with 4 parameters
    function insert_record($a,$b,$c,$d)
    {
        global $db;
        // using the passed values to generate insert
        $query = "insert into students (firstname,lastname,address,phoneno) values('$a','$b','$c','$d')";
        $result = mysqli_query($db->connection,$query);

        //if the db query is success result will not be null

        // if result is not null / empty / has a value return true , or else false
        if($result)
        {
            return true;
        }
        else
        {
            return false;
        }
    }

    // View Database Record
    public function view_record()
    {
        global $db;
        $query = "select * from students";
        $result = mysqli_query($db->connection,$query);
        return $result;
    }

    //Get the Particular record
    public function get_record($id)
    {
        global $db;
        $sql = "select * from students where id='$id'";
        $data = mysqli_query($db->connection,$sql);
        return $data;
    }

      //Update Record
      public function update()
      {
          global $db;

          if(isset($_POST['btn_update']))
          {
              $ID = $_POST['ID'];
              $FirstName = $db->check($_POST['First']);
              $LastName = $db->check($_POST['Last']);
              $Address = $db->check($_POST['Address']);
              $Phone = $db->check($_POST['Phone']);

            if($this->update_record($ID,$FirstName,$LastName,$Address,$Phone))
            {
                $this->set_message('<div class="alert alert-success"> Your Record Has Been Updated : )</div>');
                header("location:view.php");
            }
            else
            {
                $this->set_message('<div class="alert alert-success"> Something Wrong : )</div>');
            }
          }
      }

      // Update Function 2
      public function update_record($id,$first,$last,$address,$phone)
      {
          global $db;
          $sql = "update students set firstname='$first', lastname='$last', address='$address', phoneno='$phone' where id='$id'";
          $result = mysqli_query($db->connection,$sql);
          if($result)
          {
              return true;
          }
          else
          {
              return false;
          }

      }

      // Set Session Message
      public function set_message($msg)
      {
          if(!empty($msg))
          {
            $_SESSION['Message']=$msg;
          }
          else
          {
              $msg = "";
          }
      }

      // Display Session Message
      public function display_message()
      {
          if(isset($_SESSION['Message']))
          {
              echo $_SESSION['Message'];
              unset($_SESSION['Message']);
          }
      }
      // Delete Record
      public function Delete_Record($id)
      {
          global $db;
          $query = "delete from students where id='$id'";
          $result = mysqli_query($db->connection,$query);
          if($result)
          {
              return true;
          }
          else{
              return false;
          }
      }

      //Employee Record
      public function Employee_Record()
      {
          global $db;
          if(isset($_POST['btn_register']))
          {

              $FirstName = $db->check($_POST['First']);
              $LastName = $db->check($_POST['Last']);
              $Email = $db->check($_POST['Email']);
              $Password = $db->check($_POST['Password']);




              if($this->emp_record($FirstName,$LastName,$Email,$Password))
              {
                  echo '<div class="alert alert-success"> Your Have Successfully Registered :) </div>';
              }
              else
              {
                  echo '<div class="alert alert-danger"> Failed </div>';
              }
          }
      }

      function emp_record($a,$b,$c,$d)
      {
          global $db;

          $query = "insert into employees (firstname,lastname,email,password) values('$a','$b','$c','$d')";
          $result = mysqli_query($db->connection,$query);


          if($result)
          {
              return true;
          }
          else
          {
              return false;
          }
      }

      function login()
      {
        global $db;
        if(isset($_POST['btn_login']))
        {
          $Email = $db->check($_POST['Email']);
          $Password = $db->check($_POST['Password']);

          $sql = "SELECT id FROM employees WHERE email = '$Email' and password = '$Password'";
          $result = mysqli_query($db->connection,$sql);
          $row = mysqli_fetch_array($result,MYSQLI_ASSOC);


        $count = mysqli_num_rows($result);

      // If result matched $myusername and $mypassword, table row must be 1 row

      if($count == 1) {
         header("location: view.php");
      }else {
         echo '<div class="alert alert-danger"> Email or Password is Wrong </div>';
      }

        }

      }

      

    }

?>
