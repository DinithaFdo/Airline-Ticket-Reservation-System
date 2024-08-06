<?php
function emptyInputSignup($fname, $lname, $username, $email, $psw, $pswrepeat) {
    return empty($fname) || empty($lname) || empty($username) || empty($email) || empty($psw) || empty($pswrepeat);
}

function invalidUsername($username) {
    return !preg_match("/^[a-zA-Z0-9]*$/", $username);
}

function invalidEmail($email) {
    return !filter_var($email, FILTER_VALIDATE_EMAIL);
}

function pswMatch($psw, $pswrepeat) {
    return $psw !== $pswrepeat;
}

function usernameExists($conn, $username, $email) {
    $sql = "SELECT * FROM users WHERE uname = ? OR email = ?";
    $stmt = mysqli_stmt_init($conn);

    if (!mysqli_stmt_prepare($stmt, $sql)) {
        return false; 
    }

    mysqli_stmt_bind_param($stmt, "ss", $username, $email);
    mysqli_stmt_execute($stmt);
    $resultData = mysqli_stmt_get_result($stmt);

    if ($row = mysqli_fetch_assoc($resultData)) {
        return $row;
    } else {
        return false;
    }

    mysqli_stmt_close($stmt);
}

function createUser($conn, $fname, $lname, $email, $username, $psw) {
    $sql = "INSERT INTO users (fname, lname, uname, email, password) VALUES (?, ?, ?, ?, ?)";
    $stmt = mysqli_stmt_init($conn);

    if (!mysqli_stmt_prepare($stmt, $sql)) {
        return false;
    }

    $hashedPsw = password_hash($psw, PASSWORD_DEFAULT);
    mysqli_stmt_bind_param($stmt, "sssss", $fname, $lname, $username, $email, $hashedPsw);

    if (mysqli_stmt_execute($stmt)) {
        return true;
    } else {
        return false;
    }

    mysqli_stmt_close($stmt);
}

function emptyInputLogin($username, $psw) {
    return empty($username) || empty($psw);
}

function loginUser($conn, $username, $psw) {
    $userExists = usernameExists($conn, $username, $username);

    if ($userExists === false) {
        return false; 
    }

    $hashedPsw = $userExists["password"];
    $checkPsw = password_verify($psw, $hashedPsw);

    if ($checkPsw === false) {
        return false;
    } else if ($checkPsw === true) {
        session_start();
        $_SESSION["username"] = $userExists["uname"];
        $_SESSION["email"] = $userExists["email"];
        $_SESSION["fname"] = $userExists["fname"];
        $_SESSION["lname"] = $userExists["lname"];
        $_SESSION["pic"] = $userExists["pic"];
        $_SESSION["tel"] = $userExists["tel"];
        $_SESSION["meal"] = $userExists["meal"];
        $_SESSION["name"] = $userExists["name"];
        $_SESSION["age"] = $userExists["age"];
        $_SESSION["gender"] = $userExists["gender"];
        $_SESSION["nation"] = $userExists["nation"];
        $_SESSION["country"] = $userExists["country"];
        $_SESSION["uid"] = $userExists["uid"];


        
        return true;
        

    }
}


