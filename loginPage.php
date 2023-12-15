<?php
include ('../classes/userLogin.php');

$login = new userLogin;
$login->isLoggedin();
if (isset($_POST['Submit'])) {
    $email =$_POST['email'];
    $pwd =$_POST['pwd'];

    $checklogin = $login->userLogin($email, $pwd);
    if ($checklogin) {
        $admin = $login->isAdmin();
        if($admin){
            header("location: admindash.php");
        }else{
            header("location: shop.php");
        }
    }else{
        echo "<h2>Invalid Login Details!</h2>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login page</title>
    <link rel="stylesheet" href="../css/login.css">
</head>
<body>
    <div class="toppage">
        <div class="businessname">
            <h2>Talitsi cakes</h2>
        </div>
        <div class="navbar">
            <ul>
                <li><a href="frontPage.php">Home</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Contacts</a></li>
                <li><a href="signupPage.php">Signup</a></li>
            </ul>   
        </div> 
        <div class="pagename">
            <h2>Login Page</h2>
        </div>       
    </div>
    
    <div class="form">
        <form action="#"method="POST">
            <h2>Login</h2>
            <label for="">Email: </label>
            <input type="email"placeholder="eg.lisanzatabitha@gmail.com"name="email"required><br>
            <label for="">Password: </label>
            <input type="password"placeholder="Enter password"name="pwd"required><br>
            <div class="button">
                <input type="submit" value="Login"name="Submit">
            </div>
        </form>

    </div>
    <footer>
        <div class="container">
            <div class="aboutussec"> 
                <h2>About Us</h2>
                <p>Talitsi Cakes is a business that focuses solely on promoting Sweetness to customers. Lorem ipsum dolor sit amet, 
                    consectetur adipisicing elit. Praesentium quisquam, ullam temporibus inventore autem, 
                    nisi.</p>
                <ul class="sci">
                    <li><a href="#"><img src="../images/facebook.png"></a></li>
                    <li><a href="#"><img src="../images/instagram.png"></a></li>
                    <li><a href="#"><img src="../images/twitter.png"></a></li>
                    <li><a href="#"><img src="../images/linkedin.png"></a></li>
                </ul>
            </div>
            <div class="quicklinkssec">
                <h2>Quick Links</h2>
                <ul>
                    <li><a href="#">About</a></li>
                    <li><a href="#">FAQ</a></li>
                    <li><a href="#">Privacy Policy</a></li>
                    <li><a href="#">Help</a></li>
                    <li><a href="#">Terms & Conditions</a></li>
                    <li><a href="#">Contact</a></li>
                </ul>
            </div>
            <div class="quicklinkssec">
                <h2>Shop</h2>
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">About</a></li>
                    <li><a href="#">Contacts</a></li>
                    <li><a href="#">Shop</a></li>
                    <li><a href="#">Services</a></li>
                    <li><a href="#">Our History</a></li>
                </ul>
            </div>
            <div class="contactssec">
                <h2>Contact Us</h2>
                <ul class="info">
                    <li>
                        <span><img src="../images/placeholder.png"></span>
                        <span> 56 Gitanga Road <br> 
                            Nairobi, Dago 17161,<br> Kenya</span>
                    </li>
                    <li>
                        <span><img src="../images/icons8-phone-26.png"></span>
                        <p><a href="tel:+254706111014">+254706111014</a><br>
                        </p>
                    </li>
                    <li>
                        <span><img src="../images/gmail.png"></span>
                        <p><a href="mailto:lisanzatabitha@gmail.com">&nbsplisanzatabitha@gmail.com</a><br>
                        </p>
                    </li>
                </ul>
            </div>
        </div>
    </footer>
    <div class="copyrighttext">
        <p>Copyright Talitsi Cakes || All Rights Reserved</p>
    </div>
</body>
</html>


