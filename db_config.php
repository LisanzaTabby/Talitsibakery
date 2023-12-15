<?php

//defining our database
define ('DB_HOST','localhost');
define ('DB_USER','root');
define ('DB_PWD','');
define ('DB_NAME','oopproject');

include_once ('../classes/Databaseconn.php');
$db = new Databaseconn;

?>