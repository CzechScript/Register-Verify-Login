<?php
if (isset($_POST['login_button'])) {

    require_once 'dbh_inc.php';
    require_once 'functions_inc.php';

    $emailUsername = $_POST['emailUsername'];
    $password = $_POST['password'];

    if (empty($emailUsername) || empty($password)) {
        header("Location: ../login.php?error=emptyfields&emailUsername" . $emailUsername);
        exit();
    }
    loginUser($conn, $emailUsername, $password);
} else {
    header("Location: ../CzechScript/login.php");
    exit();
}
