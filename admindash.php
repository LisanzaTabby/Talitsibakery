<?php
include ('../classes/userLogin.php');
include ('../classes/actions.php');


$user = new userLogin;

if (isset($_POST['logout'])) {
    $loggedOut = $user->logOut();
    if ($loggedOut) {
        header("location: loginPage.php");
    }
    
}
$customer = new actions;
if (isset($_POST['delete'])) {
    $cust_id = $_POST['delete'];
    $result = $customer-> delete($cust_id);
    if ($result) {
        echo "<h3>Successfully deleted customer information</h3>";
        
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
    <title>Talisti Admin</title>
    <link rel="stylesheet" href="../css/admindashboard.css">
</head>
<body>
    <div class="toppage">
        <div class="businessname">
            <h2>Talitsi Admin dashboard</h2>
        </div>
        <div class="navbar">
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Contacts</a></li>
                <?php if (isset($_SESSION['authenticated'])) : ?>
                <li><img src="../images/user.png"><h2><?= $_SESSION['loggedin_user']['fname']; ?></h2></li>
                <li>
                    <form action="" method="POST">
                        <input type="submit" value="logout"name="logout">
                    </form>
                </li>
                <?php else: ?>
                <li><a href="loginPage.php">Login</a><Span>|</Span></li>
                <li><a href="signupPage.php">Signup</a></li>
                <?php endif;?>
            </ul>   
        </div>        
    </div>
    <div class="mainpage">
        <div class="usertable">
            <h2 class="tblhead">Customers Table</h2>
            <table>
                <thead>
                    <tr>
                        <th>Customer ID</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody>
                    <?php                   
                    $result = $user->getAllusers();
                    if ($result) {
                        foreach($result as $row){
                            ?>
                            <tr>
                                <td><?= $row['users_id'] ?></td>
                                <td><?= $row['fname'] ?></td>
                                <td><?= $row['lname'] ?></td>
                                <td><?= $row['email'] ?></td>
                                <td><?= $row['phone'] ?></td>
                                <td>
                                    <div class="button1">
                                        <a href="user-edit.php?id=<?= $row['users_id'] ?>">Edit</a>
                                    </div>
                                </td>
                                <td>
                                    <form action="#" method="post">
                                        <button type="submit"name="delete"value="<?= $row['users_id'] ?>">DELETE</button>
                                    </form>
                                </td>
                            </tr>

                            <?php
                        }
                    } else {
                        echo"No data Found";
                    }                    
                    ?>
                </tbody>
            </table>
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