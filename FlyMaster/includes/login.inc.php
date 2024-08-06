<?php
if (isset($_POST["login"])) {
    $username = $_POST["uname"];
    $psw = $_POST["psw"];

    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';

    if (emptyInputLogin($username, $psw)) {
        echo '<script>window.alert("Please Fill the all the fields to login"); window.location.href = "../redirect.login.php";</script>';
        echo("loginfailed");
        exit();
    }

    if (loginUser($conn, $username, $psw)) {
        $fname = $_SESSION["fname"];
        $lname = $_SESSION["lname"];
        $uname = $_SESSION["username"];
        $email = $_SESSION["email"];
        $pic = $_SESSION["pic"];
        $tel = $_SESSION["tel"];
        $meal = $_SESSION["meal"];
        $name = $_SESSION["name"];
        $age = $_SESSION["age"];
        $gender = $_SESSION["gender"];
        $nation = $_SESSION["nation"];
        $country = $_SESSION["country"];
        $uid = $_SESSION["uid"];

        if($uname === 'admin'){
            echo '<script>window.alert("Welcome System admin!"); window.location.href = "../admin/register.php?login=success";</script>';

        } elseif ($uname === 'fcontroller')

        {
            echo '<script>window.alert("Welcome Flight controller!"); window.location.href = "../fcontroller/flightManage.php?login=success";</script>';
        }

        else{
            header("Location:../bookticket.php?login=success"); 
        }
        
        exit();

    } else {
        echo '<script>window.alert("Login Failed!"); window.location.href = "../redirect.login.php";</script>';
        exit();
    }
} else {
    header("Location:../index.php");
}


