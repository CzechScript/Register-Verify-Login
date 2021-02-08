<?php
require "header.php";
?>
<main>
    <div class="container">
        <div class="verifyBx">
            <h2>Verify your email!</h2>
            <?php
            if (isset($_SESSION['email'])) {
                echo '<p>Your email -> ' . $_SESSION['email'] . '</p>';
            }
            ?>
            <p>Your account has been registered. Now please visit
                your email and click on the link in the email
                to confirm your registration.</p>
            <i class="far fa-envelope"></i>
        </div>
    </div>
</main>