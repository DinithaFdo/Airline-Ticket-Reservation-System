<?php
if (isset($_POST["signup"])) {
    $fname = $_POST["fname"];
    $lname = $_POST["lname"];
    $username = $_POST["uname"];
    $email = $_POST["email"];
    $psw = $_POST["psw"];
    $pswrepeat = $_POST["pswrepeat"];

    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';

    if (emptyInputSignup($fname, $lname, $username, $email, $psw, $pswrepeat)) {
        echo '<script>window.alert("Please fill all fields to create the account"); window.location.href = "../signup.php";</script>';
        exit();
    }

    if (invalidUsername($username)) {
        echo '<script>window.alert("Invalid username. Remove special characters and try again"); window.location.href = "../signup.php";</script>';
        exit();
    }

    if (invalidEmail($email)) {
        echo '<script>window.alert("Invalid Email. Check the email again"); window.location.href = "../signup.php";</script>';
        exit();
    }

    if (pswMatch($psw, $pswrepeat)) {
        echo '<script>window.alert("YPasswords do not mactch. Please type the same password in the fields); window.location.href = "../signup.php";</script>';
        exit();
    }

    $userExists = usernameExists($conn, $username, $email);

    if ($userExists !== false) {
        echo '<script>window.alert("Username Already taken. Please select a different username"); window.location.href = "../signup.php";</script>';
        exit();
    }

    if (createUser($conn, $fname, $lname, $email, $username, $psw)) {
        echo '<script>window.alert("You have successfully registered to the system. Now you can login to the system"); window.location.href = "../redirect.login.php";</script>';
        exit();
        
    } else {
        header("Location:../signup.php?error=stmtfailed");
        exit();
    }
} else {
    header("Location:../index.php");
}

