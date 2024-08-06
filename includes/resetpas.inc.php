<?php
include_once 'dbh.inc.php'; 

if (isset($_POST['reset_password'])) {
    if (isset($_POST['uname_email']) && isset($_POST['new_password']) && isset($_POST['confirm_new_password'])) {
        $uname_email = $_POST['uname_email'];
        $new_password = $_POST['new_password'];
        $confirm_new_password = $_POST['confirm_new_password'];

       
        if ($new_password != $confirm_new_password) {
            header("Location: ../forgetpas.php?error=PasswordMismatch");
            exit();
        }

       
        $sql = "SELECT * FROM users WHERE uname = ? OR email = ?";
        $stmt = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt, $sql)) {
            header("Location: ../forgetpas.php?error=SQLInjection");
            exit();
        } else {
            mysqli_stmt_bind_param($stmt, "ss", $uname_email, $uname_email);
            mysqli_stmt_execute($stmt);
            $result = mysqli_stmt_get_result($stmt);
            if ($row = mysqli_fetch_assoc($result)) {
                $hashedPwd = password_hash($new_password, PASSWORD_DEFAULT);
                $updateSql = "UPDATE users SET password = ? WHERE id = ?";
                $updateStmt = mysqli_stmt_init($conn);
                if (!mysqli_stmt_prepare($updateStmt, $updateSql)) {
                    header("Location: ../forgetpas.php?error=SQLInjection");
                    exit();
                } else {
                    mysqli_stmt_bind_param($updateStmt, "si", $hashedPwd, $row['id']);
                    mysqli_stmt_execute($updateStmt);
                    header("Location: ../login.php?passwordreset=success");
                    exit();
                }
            } else {
                header("Location: ../forgetpas.php?error=UserNotFound");
                exit();
            }
        }
    } else {
        
        header("Location: ../forgetpas.php?error=MissingFields");
        exit();
    }
} else {
    header("Location: ../forgetpas.php");
    exit();
}
?>
