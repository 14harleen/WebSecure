<?php
	//Define variables needed to connect to the MySQL database
    define('DB_DSN', 'mysql:host=sql213.epizy.com;dbname=epiz_31916794_threeshield;charset=utf8');
    define('DB_USER', 'epiz_31916794');
    define('DB_PASS', 'aV3n3QbwKzVXR');

    //Connect to the database. If the connection fails the webapp exits
    try {
        $connection = new PDO(DB_DSN, DB_USER, DB_PASS);
    } catch (PDOException $e) {
        error_log($e->getMessage());
        die(); // Force execution to stop on errors.
    }
?>