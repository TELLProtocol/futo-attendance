<?php

/* Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with password) */

define('DB_SERVER', 'amwhdi.h.filess.io');
define('DB_USERNAME', 'futo_attendance_savetower');
define('DB_PASSWORD', 'd8ef66f66446a71e22b98f2c8ec2af7985d40595');
define('DB_NAME', 'futo_attendance_savetower');
 
/* Attempt to connect to MySQL database using PDO method */
try{
    $pdo = new PDO("mysql:host=" . DB_SERVER . ";dbname=" . DB_NAME, DB_USERNAME, DB_PASSWORD);
    /* Set the PDO error mode to exception */
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e){
	/* Kill script with error message */
    die("ERROR: Error connecting to DB! " . $e->getMessage());
}
?>
