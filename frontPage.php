<?php
include('../config/db_config.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Talitsi bakery</title>
    <link rel="stylesheet" href="../css/home.css">
</head>
<body>
    <div class="toppage">
        <div class="businessname">
            <h2>Talitsi cakes</h2>
        </div>
        <div class="navbar">
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Contacts</a></li>
                <li><a href="loginPage.php">Login</a><Span>|</Span></li>
                <li><a href="signupPage.php">Signup</a></li>
            </ul>   
        </div>        
    </div>
    
    <div class="mainpage">
        <div class="message">
            <div class="img1">
                <img src="../images/chocoqueen.jpg">
            </div>

            <h1><span class="intro">Welcome to Talitsi Cakes,</span><br>where Sweetness is a Priority<br>

                <button class="msgbtn">ReadMore</button></h1>

            <div class="img2">
                <img src="../images/redvelvet.jpg">
            </div>
            


        </div>

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