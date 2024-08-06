<?php
// start the session
session_start();
$id=$_SESSION['id'];
include "conn.php";


$from=mysqli_real_escape_String($conn,$_POST['from']);
$to=mysqli_real_escape_String($conn,$_POST['to']);
$depart=mysqli_real_escape_String($conn,$_POST['depart']);
$return=mysqli_real_escape_String($conn,$_POST['return']);
$passengers=mysqli_real_escape_String($conn,$_POST['passengers']);
$class=mysqli_real_escape_String($conn,$_POST['class']);
$status=mysqli_real_escape_String($conn,$_POST['status']);;





// $insert="INSERT INTO `flights`(`airline`, `seat`, `from`, `to`, `depart`, `return`, `status`)  VALUES ('$class','$passengers','$from','$to','$depart','$return','$status')";

$insert="UPDATE `flights` SET `airline`='$class',`seat`='$passengers',`from`='$from',`to`='$to',`depart`='$depart',`return`='$return',`status`='$status' WHERE `pnr`='$id'";


if(mysqli_query($conn,$insert)){
        echo "Data Sucessfull";
        // header("Location:../Pages/index.php");
        header("Location:flightManage.php");
    }else{
        echo "Error";
        // header("Location:Register_Form.php");
    }


?>