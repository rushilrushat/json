<?php

    class DB_CONNECT{
        private $con;
        public function __construct(){
            $this->connect();
        }
        
        public function __destruct(){
            $this->close();
        }
        
        function connect(){
            require_once 'db_config.php';
            $this->con = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
            if (!$this->con) {
                die("Connection failed: " . mysqli_connect_error());
            }
            /*if (mysqli_connect_errno($this->connect)){
                echo "Unable to connect to MySQL Database: " . mysqli_connect_error();
            }*/
            return $this->con;            
        }
        
        function close(){
            
            mysqli_close($this->con);
        }
    }
?>
