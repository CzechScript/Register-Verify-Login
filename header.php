<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CzechScript</title>
    <link rel="stylesheet" href="header_style.css">
    <link rel="stylesheet" href="courses.css">
    <link rel="stylesheet" href="header_footer.css">
    <link rel="icon" type="image/png" href="images/favicon.png" />
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@1,500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">
</head>

<body>
    <header>
        <nav>
            <div class="logo">
                <a href='index.php'>
                    <h4>CzechScript</h4>
                </a>
            </div>
            <ul class="nav-links">
                <li><a href="index.php">Home</a></li>
                <li><a href="allCourses.php">All Courses</a></li>
                <li><a href="#">About</a></li>
                <?php
                if (isset($_SESSION['userId'])) {
                    echo '<li>
                            <form action="includes/logout_inc.php" methode="post">
                                <button type="submit" class="Logout" name="logout-submit">Logout</button>
                            </form>
                            </li>';
                } else {
                    echo '<li><a class="StartLearn" href="login.php">Start Learning!</a></li>';
                }
                ?>

            </ul>
        </nav>
    </header>