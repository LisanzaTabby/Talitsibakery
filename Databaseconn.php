<?php
// define our database class

class Databaseconn{

    // start our database connectivity
    public function __construct(){

        $conn = new mysqli(DB_HOST,DB_USER,DB_PWD,DB_NAME);

        if ($conn-> connect_error) {
            die('<h1>Database connection Failed!</h1>');
        }
        return $this-> conn = $conn;
        
    }

}

?>