<?php
    class DatabaseConnection{

        private $pdo;

        // construct

        function __construct($dsn, $username, $password){
            try {
                $this->pdo = new PDO($dsn, $username, $password);
                $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch (PDOException $e) {
                die("Connection failed". $e->getMessage());
            }
        }

        public function is_connected(){
            return ($this->pdo !== null);
        }

        // Perform queries

        // destruct
        public function __destruct(){
            $this->pdo = null;
        }
    }

    $db = new DatabaseConnection('mysql:host=localhost;dbname=co-op-db', 'root', '');
    if ($db->is_connected()) {
        echo "Connection successful";
    }else{
        echo "Connection failed";
    }
?>