<?php

class Database {
    
    public $db_connection;

    public function __construct() {
        require 'config.php';
        try {

            $this->db_connection = new PDO('mysql:host='.$config['host'].';dbname='.$config['db_name'].'; charset=utf8', 
                                            $config['user'], $config['pwd']);

            $this->db_connection -> setAttribute(PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
        } 
        catch (PDOException $e) {
            die('Error: '. $e->getMessage());
        }
    }
}