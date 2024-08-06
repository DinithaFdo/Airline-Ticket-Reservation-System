<?php
session_start();
include_once 'dbh.inc.php';

if (isset($_POST["meal"])) {
    $booking_meal = $_POST['meal'];

    // SQL query to delete user data from the 'users' table
    $sql = "UPDATE FROM booking WHERE meal= ?";

    // Prepare the SQL statement
    $stmt = mysqli_prepare($conn, $sql);

    // Bind the parameter to the statement
    mysqli_stmt_bind_param($stmt, "s", $booking_meal);

    // Execute the statement
    if (mysqli_stmt_execute($stmt)) {
        echo '<script>window.alert("Meal Updated"); window.location.href = "../manage.php?meal=success";</script>';
        exit();
    } else {
        // Deletion failed
        // You can handle the error as needed, e.g., display an error message or redirect
        echo '<script>window.alert("Meal not Updated"); window.location.href = "../manage.php?meal=failed";</script>' . mysqli_error($conn);
        exit();
    }
} else {
    // Redirect the user to the profile page if they try to access this script directly
    echo '<script>window.alert("Not authrized"); window.location.href = "../manage.php?notauthrizesed";</script>';
    exit();
}
?>


