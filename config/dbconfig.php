<?php
    session_start();
    require_once('./config/operations.php');

    class dbconfig
    {
        public $connection;

        // constructor will call the db_connect method when this class is created
        public function __construct()
        {
            $this->db_connect();
        }

        // method to connect to database
        public function db_connect()
        {
            $this->connection = mysqli_connect('localhost' , 'root' ,'1998' , 'management_system');
            if(mysqli_connect_error())
            {
                die(" Connect Failed ");
            }
        }

        public function check($a)
        {
            $return = mysqli_real_escape_string($this->connection,$a);
            return $return;
        }
    }
?>
