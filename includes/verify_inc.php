<?php
if (isset($_GET['vkey'])) {

    require_once 'dbh_inc.php';
    require_once 'functions_inc.php';

    $vKey = $_GET['vkey'];
    $verifyMatch = findUnverified($conn, $vKey);
    if ($verifyMatch == false) {
        header("Location: ../login.php?error=verify");
        exit();
    } else if (sizeof($verifyMatch) == 2) {
        verifyUpdate($conn, $vKey);
        header("Location: ../login.php?succes=verified");
        exit();
    } else {
        header("Location: ../login.php?error=verify");
        exit();
    }
} else {
    header("Location: ../login.php");
    exit();
}
