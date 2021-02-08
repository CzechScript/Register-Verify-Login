<?php
require "header.php";
?>
<main>
    <div class="container">
        <div class="formBx">
            <form action="includes/login_inc.php" method="post">
                <h2>Sign In</h2>
                <?php
                if (isset($_GET['error'])) {
                    if ($_GET['error'] == "emptyfields") {
                        echo '<p class="signuperror">Fill in all fields!</p>';
                    }
                    if ($_GET['error'] == "invalidlogin") {
                        echo '<p class="signuperror">Invalide Username or Email!</p>';
                    }
                    if ($_GET['error'] == "invalidpwd") {
                        echo '<p class="signuperror">Your password is wrong!</p>';
                    }
                    if ($_GET['error'] == "unverified") {
                        echo '<p class="signuperror">Please verify your account!</p>';
                    }
                    if ($_GET['error'] == "verify") {
                        echo '<p class="signuperror">We can\'t verify your account!</p>';
                    }
                }
                if (isset($_GET['succes'])) {
                    if ($_GET['succes'] == "verified") {
                        echo '<p class="signuperror">Your account is verified, you can log in now!</p>';
                    }
                }
                ?>
                <input type="text" name="emailUsername" placeholder="User name or Email address">
                <input type="password" name="password" placeholder="Password">
                <input type="submit" name="login_button" value="Sign In">
                <p class="signup">New to CzechScript? <a href="register.php">Create an Account.</a></p>
            </form>
        </div>
    </div>
</main>