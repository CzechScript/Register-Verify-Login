<?php
    if(isset($_POST['register_button'])){

        require_once 'dbh_inc.php';
        require_once 'functions_inc.php';

        $username =$_POST['username'];
        $email =$_POST['email'];
        $password_1 =$_POST['password_1'];
        $password_2 =$_POST['password_2'];

        if(empty($username) || empty($email) || empty($password_1) || empty($password_2)){
            header("Location: ../register.php?error=emptyfields&username=".$username."&email=".$email);
            exit();
        }
        else if(!filter_var($email, FILTER_VALIDATE_EMAIL)&&!preg_match("/^[a-zA-Z0-9]*$/", $username)){
            header("Location: ../register.php?error=invalidmailusername");
            exit();
        }
        else if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            header("Location: ../register.php?error=invalidmail&username=".$username);
            exit();
        }
        else if(!preg_match("/^[a-zA-Z0-9]*$/", $username)){
            header("Location: ../register.php?error=invalidusername&email".$email);
            exit();
        }
        else if($password_1 !== $password_2){
            header("Location: ../register.php?error=passwordcheck&username=".$username."&email=".$email);
            exit();
        }
        else if(uidExists($conn,$username) !== false){
            header("Location: ../register.php?error=uisexist&email=".$email);
            exit();
        }
        else if(emailExists($conn,$email) !== false){
            header("Location: ../register.php?error=passwordcheck&username=".$username);
            exit();
        }

        createUser($conn,$username,$email,$password_1);
    }
    else{
        header("Location: ../register.php");
        exit();
    }