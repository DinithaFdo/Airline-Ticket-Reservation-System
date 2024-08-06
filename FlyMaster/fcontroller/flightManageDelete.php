


<?php
include "conn.php";

?>

<?php

if(isset($_GET['deleteid'])){
    $cid=$_GET['deleteid'];
    $deletecareer="DELETE FROM `flights` WHERE `pnr`='$cid'";
    
    
    $result=mysqli_query($conn,$deletecareer);
    if($result){
        header("Location:flightManage.php");
    }
}
?>