<?php

class actions {
    
    public function __construct(){
        $db = new Databaseconn;
        $this-> conn = $db ->conn;
    }
    public function getAllusers(){
        $sql = "SELECT * FROM users WHERE user_type= 'user'";
        $result = $this->conn->query($sql);
        if($result -> num_rows >0 ){
            return $result;
        }else{
            return false;
        }
    }
    public function edit($id){
        $cust_id = $this->conn->real_escape_string($id);
        $sql = "SELECT * FROM users WHERE users_id = '$cust_id' LIMIT 1";
        $result = $this->conn->query($sql);
        if ($result-> num_rows == 1) {
            $data = $result-> fetch_assoc();
            return $data;
        }else{
            return false;
        }
    }
    public function update($updateddata, $id){
        $cust_id = $this->conn->real_escape_string($id);
        $fname = $updateddata['fname'];
        $lname = $updateddata['lname'];
        $email = $updateddata['email'];
        $phone = $updateddata['phone'];

        $sql = "UPDATE users SET fname='$fname',lname='$lname',email='$email',phone='$phone' WHERE users_id ='$cust_id' LIMIT 1";
        $result = $this->conn->query($sql);
        if ($result) {
            return true;
        }else{
            return false;
        }


    }
    public function delete($cust_id){
        $customer_id = $this->conn->real_escape_string($cust_id);
        $sql = "DELETE FROM users where users_id='$customer_id' LIMIT 1";
        $result = $this->conn->query($sql);
        if ($result) {
            return true;
        }else{
            return false;
        }


    }
    public function logOut()
    {
        if (isset($_SESSION['authenticated'])===TRUE) 
        {
            unset($_SESSION['authenticated']);
            unset($_SESSION['loggedin_user']);
            return true;
        }
        else{
            return false;
        }

    }
}
?>