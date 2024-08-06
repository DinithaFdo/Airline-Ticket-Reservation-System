<?php
// start the session
session_start();
include "conn.php";


$from=mysqli_real_escape_String($conn,$_POST['from']);
$to=mysqli_real_escape_String($conn,$_POST['to']);
$depart=mysqli_real_escape_String($conn,$_POST['depart']);
$return=mysqli_real_escape_String($conn,$_POST['return']);
$passengers=mysqli_real_escape_String($conn,$_POST['passengers']);
$class=mysqli_real_escape_String($conn,$_POST['class']);
$status=1;






$insert="INSERT INTO `flights`(`airline`, `seat`, `from`, `to`, `depart`, `return`, `status`)  VALUES ('$class','$passengers','$from','$to','$depart','$return','$status')";

if(mysqli_query($conn,$insert)){
        echo "Data Sucessfull";
        // header("Location:../Pages/index.php");
        header("Location:newFlight.php");
    }else{
        echo "Error";
        // header("Location:Register_Form.php");
    }


?>