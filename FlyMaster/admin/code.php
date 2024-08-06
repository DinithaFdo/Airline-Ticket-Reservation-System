<?php
session_start();

$connection = mysqli_connect("localhost","root","","flymaster_login");
if(isset($_POST["registerbtn"]))
{
    $username=$_POST["username"];
    $Email=$_POST["email"];
    $Password =$_POST["password"];
    $Cpassword=$_POST["comfirmpassword"];

    if($password === $Cpassword)
    {
         $query = "INSERT INTO users (uname,email,password) VALUES('$username','$Email','$Password')";
         $query_run = mysqli_query($connection,$query);
    
         if($query_run)
           {
              $_SESSION['success'] = "Admin Profile Added";
              header('Location:register.php');
           }
         else
           {
              $_SESSION['status'] = "Admin Profile Not Added";
              header('Location:register.php');
           }
    }
    else
    {
       $_SESSION['status'] = "Pssword and Comfirm Does not Match";
       header('Location:register.php');
    }
}
    

if(isset($_POST['updatebtn']))
{
  $username = $_POST['edit_username'];
  $email = $_POST['edit_email'];
  $password = $_POST['edit_password'];

  $query = "UPDATE users SET uname='$username',email='$email', password='$password' WHERE `uid`='$id' ";
  $query_run = mysqli_query($connection, $query);

  if($query_run)
  {
    $_SESSION['success']= "Your Data is Updated";
    header('Location:register.php');
  }
  else
  {
    $_SESSION['status']= "Your Data is NOT Updated";
    header('Location:register.php');
  }
}


if(isset($_POST['delete_btn']))
{
   $id = $_POST['delete_id'];

   $query ="DELETE  FROM users WHERE `uid`='$id'";
   $query_run = mysqli_query($connection, $query);

   if($query_run)
   {
    $_SESSION['success']= "Your Data is Deleted";
    header('Location:register.php');
   }
   else
   {
    $_SESSION['status']= "Your Data is Not Deleted";
    header('Location:register.php');
   }
}





?>