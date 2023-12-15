<?php
include('../config/db_config.php');
include ('../classes/actions.php');

if(isset($_POST['edit'])){
    $cust_id = $_POST['cust_id'];
    $updateddata = [
        'fname'=> $_POST['fname'],
        'lname'=> $_POST['lname'],
        'email'=> $_POST['email'],
        'phone'=> $_POST['phone']

    ];
    $customer = new actions;
    $result = $customer-> update($updateddata, $cust_id);
    if ($result) {
        echo "<h3>Successfully updated customer information</h3>";
    }else{
        echo "<h3>Something went Wrong!</h3>";
        
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Talitsi edit page</title>
    <link rel="stylesheet" href="../css/useredit.css">
</head>
<body>
    <div class="toppage">
        <div class="businessname">
            <h2>Talitsi cakes edit page</h2>
        </div>
        <div class="navbar">
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Contacts</a></li>
                <li><img src="../images/user.png"></li>
                
            </ul>   
        </div>        
    </div>
    
    <div class="mainpage">
        <div class="content">
            <h2>customer information</h2>
        <div class="form">
            <?php
            if (isset($_GET['id'])) {
                $cust_id = $_GET['id'];
                $admin = new actions;
                $result = $admin-> edit($cust_id);
                if ($result) {
                    ?>
                    <form action=""method="POST">
                        <input type="hidden" name="cust_id"value="<?= $result['users_id']?>">
                        <label for="">First Name: </label>
                        <input type="text" name="fname"value="<?= $result['fname']?>"required><br>
                        <label for="">Last Name: </label>
                        <input type="text"name="lname"value="<?= $result['lname']?>"required><br>
                        <label for="">Email: </label>
                        <input type="email"name="email"value="<?= $result['email']?>"required><br>
                        <label for="">Phone Number: </label>
                        <input type="text" name="phone"value="<?= $result['phone']?>"required><br>
                        <div class="button">
                            <input type="submit" value="Save Edit"name="edit">
                        </div>
                    </form>
                    <?php
                    
                }else{
                echo "<h3>No record found!</h3>";

                }

                
            }
            else{
                echo "<h3>Something went Wrong!</h3>";
            }
            ?>
        

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