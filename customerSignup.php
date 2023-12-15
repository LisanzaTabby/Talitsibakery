<?php
include('../config/db_config.php');

//define my customer signup class

class customerSignup{
    
    public function __construct(){
        $db = new Databaseconn;
        $this-> conn = $db-> conn;
    }

    public function registration($fname,$lname,$email,$pwd,$phone){
        $sql = "INSERT INTO users (fname,lname,email,pwd,phone) VALUES ('$fname','$lname','$email','$pwd','$phone')";
        $result = $this->conn->query($sql);
        return $result;
    }
    public function custExists($email){
        $sql = "SELECT email FROM users WHERE email='$email' LIMIT 1";
        $result = $this->conn->query($sql);
        if($result->num_rows > 0 ){
            return true;
        }else{
            return false;
        }
    }


}

?>