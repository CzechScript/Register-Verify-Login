<?php
require "header.php";
?>
<main>
    <div class="container">
        <div class="formBx">
            <form action="includes/singup_inc.php" method="post">
                <h2>Sign Up</h2>
                <?php
                if (isset($_GET['error'])) {
                    if ($_GET['error'] == "emptyfields") {
                        echo '<p class="signuperror">Fill in all fields!</p>';
                    }
                    if ($_GET['error'] == "invalidmailusername") {
                        echo '<p class="signuperror">Invalide Username and Email!</p>';
                    }
                    if ($_GET['error'] == "invalidmail") {
                        echo '<p class="signuperror">Invalide Email!</p>';
                    }
                    if ($_GET['error'] == "invalideusername") {
                        echo '<p class="signuperror">Invalide Username!</p>';
                    }
                    if ($_GET['error'] == "passwordcheck") {
                        echo '<p class="signuperror">Your passwords do not check!</p>';
                    }
                    if ($_GET['error'] == "useroremailtaken") {
                        echo '<p class="signuperror">Username or email already taken!</p>';
                    }
                    if ($_GET['error'] == "stmtfailed") {
                        echo '<p class="signuperror">Database login error!</p>';
                    }
                    if ($_GET['error'] == "none") {
                        echo '<p class="signuperror">You have been registered!</p>';
                    }
                }
                ?>
                <input type="text" name="username" placeholder="Username">
                <input type="text" name="email" placeholder="Email Address">
                <input type="password" name="password_1" placeholder="Password">
                <input type="password" name="password_2" placeholder="Confirm Password">
                <input type="submit" name="register_button" value="Sign Up">
                <p class="signup">Already have an account ? <a href="login.php">Sign In.</a></p>
            </form>
        </div>
    </div>
</main>