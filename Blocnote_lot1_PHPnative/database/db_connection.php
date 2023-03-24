<?php

require 'config.php';

try {

    $db_connection = new PDO ('mysql:host='.$config['host'].';dbname='.$config['db_name'].'; charset=utf8', 
                                  $config['user'], $config['pwd']);
    
    $db_connection -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
}
catch (PDOException $e) {
    die('Error: '. $e->getMessage());
}