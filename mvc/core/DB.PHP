<?php
    class DB
    {
        public $conn;
        public $servername = "localhost";
        public $username = "root";
        public $password = "";
        public $dbName = "mvc";

        function __construct()
        {
            $this->conn = mysqli_connect($this->servername, $this->username, $this->password);
            mysqli_select_db($this->conn, $this->dbName);
            mysqli_query($this->conn, "SET NAMES 'utf8'");
        }
    }
?>