<?php
include_once ('../classes/customerSignup.php');

if (isset($_POST['Submit'])) {
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $pwd = $_POST['pwd'];
    $phone = $_POST['phone'];

    $signup = new customerSignup;
    $checkemail = $signup->custExists($email);
    if ($checkemail) {
        echo "<h2>User Email already exists!</h2>";
    } else {
        $result = $signup->registration($fname,$lname,$email,$pwd,$phone);
        if ($result) {
            echo "<h2>Sign Up Successfull! You can now login</h2>";
        }else{
            echo "<h2>Something Went wrong!</h2>";
        }
       
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup page</title>
    <link rel="stylesheet" href="../css/Signup.css">
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
                <li><a href="loginPage.php">Login</a></li>
            </ul>   
        </div> 
        <div class="pagename">
            <h2>Signup Page</h2>
        </div>       
    </div>

    <div class="form">
        <form action=""method="POST">
            <h2>Signup form</h2>
            <label for="">First Name: </label>
            <input type="text" name="fname"required><br>
            <label for="">Last Name: </label>
            <input type="text"name="lname"required><br>
            <label for="">Email: </label>
            <input type="email"name="email"required><br>
            <label for="">Password: </label>
            <input type="password"name="pwd"required><br>
            <label for="">Phone Number: </label>
            <input type="text" name="phone"required><br>
            <div class="button">
                <input type="submit" value="Sign-UP"name="Submit">
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