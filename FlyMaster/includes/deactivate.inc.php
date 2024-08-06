<?php
session_start();
include_once 'dbh.inc.php';

if (isset($_POST["confirm"])) {
    $uname = $_SESSION["username"];

    
    $sql = "DELETE FROM users WHERE uname = ?";

    
    $stmt = mysqli_prepare($conn, $sql);

    
    mysqli_stmt_bind_param($stmt, "s", $uname);

    if (mysqli_stmt_execute($stmt)) {
        
        session_destroy();
        echo '<script>window.alert("Account Deletion Successful"); window.location.href = "../index.php?deletion=success";</script>';
        exit();
    } else {

        echo '<script>window.alert("Account Deletion Unsuccsessful"); window.location.href = "../acount.php?deletion=failed";</script>' . mysqli_error($conn);
        exit();
    }
} else {

    echo '<script>window.alert("Not authrized"); window.location.href = "../index.php?notauthrizesed";</script>';
    exit();
}

