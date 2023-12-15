<?php
// defining our userlogin class
session_start();
include('../config/db_config.php');


class userLogin extends Databaseconn {

    public function __construct(){
        $db = new Databaseconn;
        $this-> conn = $db ->conn;
    }
    public function userLogin($email, $pwd){
        $sql = "SELECT * FROM users WHERE email='$email' AND pwd='$pwd' LIMIT 1";
        $result = $this->conn->query($sql);
        if ($result->num_rows > 0) {

            $userdata = $result-> fetch_assoc();
            //storing all the data into a session
            $this-> userAuth($userdata);
            return true;
        }
        else{
            return false;
        }

    }
    private function userAuth($userdata){
        // check if the user exist that is when we can authnticate 
        $_SESSION['authenticated'] = true;// if true that means one is logged in
        //$_SESSION['user_role']= $userdata['user_type'];
        //we get the logged in user details into a session
        $_SESSION['loggedin_user']= [
            'user_id' => $userdata['users_id'],
            'fname' => $userdata['fname'],
            'lname' => $userdata['lname'],
            'email' => $userdata['email']
        ];
    }
    public function isLoggedin(){
        if (isset($_SESSION['authenticated']) === TRUE) {
            header("location: ../talitsitemplates/shop.php");
        } else {
            return false;
        }
        
    }
    public function isAdmin(){
        $userid = $_SESSION['loggedin_user']['user_id'];
        $sql = "SELECT users_id, user_type FROM users WHERE users_id='$userid' AND user_type='Admin' LIMIT 1";
        $result = $this->conn->query($sql);
        if($result-> num_rows >0){
            return true;
        }
        else{
            echo " You are not and Admin";
        }

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