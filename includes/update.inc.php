<?php
session_start();
include_once 'dbh.inc.php';



if (isset($_POST["save"])) {
    $name = $_POST["passport-name"];
    $fname = $_POST['first-name'];
    $lname = $_POST['last-name'];
    $tel = $_POST['phone-number'];
    $meal = $_POST['meal-type'];
    $name = $_POST['passport-name'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];
    $nation = $_POST['nationality'];
    $country = $_POST['country'];
    

    $identifier = $_SESSION['fname'];

    $sql = "UPDATE users 
            SET 
                fname = ?,
                lname = ?,
                tel = ?,
                meal = ?,
                name = ?,
                age = ?,
                gender = ?,
                nation = ?,
                country = ?
            WHERE 
                fname = ?";

    // Initialize a prepared statement
    $stmt = mysqli_stmt_init($conn);

    if (mysqli_stmt_prepare($stmt, $sql)) {
        // Bind the parameters
        mysqli_stmt_bind_param($stmt, "ssssssssss", $fname, $lname, $tel, $meal, $name, $age, $gender, $nation, $country, $identifier);

        // Execute the statement
        if (mysqli_stmt_execute($stmt)) {
            echo '<script>window.alert("Account Updated"); window.location.href = "../account.php?update=success";</script>';
            exit();
        } else {
            echo "Error updating user data: " . mysqli_error($conn);
        }

        // Close the prepared statement
        mysqli_stmt_close($stmt);
    }
} else {
    header("Location: ../profile.php");
    exit();
}
?>
