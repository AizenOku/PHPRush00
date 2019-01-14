<!DOCTYPE html>
<?php require 'cart.php'; ?>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Landing</title>
        <link rel="stylesheet" type="text/css" href="./index.css">
    </head>
    <body>
        <div class="main">
            <div class="top-nav">
                <a href="index.php" class="top-nav-element" id="homebutton">
                        <div>Home</div>
                </a>
                <a href="cart.php" class="top-nav-element" id="cartbutton">
                    <div>Cart</div>
                </a>
                <div class="top-nav-space"></div>
                <a href="create.html" class="top-nav-element" id="create-button">
                    <div>Create New Account</div>
                </a>
                <a href="login.html" class="top-nav-element" id="login-button">
                    <div>Log In</div>
                </a>
                <a href="logout.html" class="top-nav-element" id="logout-button">
                    <div>Log Out</div>
                </a>
            </div>
            <div class="header">
                <b>WELCOME TO MY SHOP</b>
            </div>
            <div>
                <?php products()?>
                <br />
                <?php cart()?>
                <br />
            </div>

        </div>
    </body>
</html>