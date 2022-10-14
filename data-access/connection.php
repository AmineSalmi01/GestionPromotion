<?php
    class Connect {
        private $host;
        private $user;
        private $password;
        private $database;

        public function connect(){
            $this->host = "localhost";
            $this->user = "root";
            $this->password = "";
            $this->database = "promotion2";

            $conn = new mysqli($this->host,$this->user,$this->password,$this->database);
            return $conn;
        }
    }
?>