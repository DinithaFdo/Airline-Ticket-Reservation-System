
<?php
   session_start();
?>

<h1 style="color: #3498db; font-weight: bold; text-align: center;">Edit Admin Profile</h1>



    <?php

    $connection = mysqli_connect("localhost","root","","flymaster_login");

    if(isset($_POST['edit_btn']))
       {
          $id = $_POST['edit_id'];

          $query = " SELECt * FROM users WHERE `uid` ='$id' ";
          $query_run = mysqli_query($connection, $query);

          foreach($query_run as $row)
          {
            ?>

<form action="code.php" method="POST" style="max-width: 400px; margin: 0 auto; padding: 20px; background-color: #f1f1f1; border-radius: 10px; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);">

  <div class="form-group" style="margin-bottom: 20px;">
    <label style="color: #333; font-size: 18px;">Username</label>
    <input type="text" name="edit_username" value="<?php echo $row['uname']?>" class="form-control" placeholder="Enter Username" style="border: 2px solid #3498db; padding: 10px; font-size: 16px;">
  </div>
  
  <div class="form-group" style="margin-bottom: 20px;">
    <label style="color: #333; font-size: 18px;">Email</label>
    <input type="text" name="edit_email" value="<?php echo $row['email']?>" class="form-control" placeholder="Enter Email" style="border: 2px solid #3498db; padding: 10px; font-size: 16px;">
  </div>
  
  <div class="form-group" style="margin-bottom: 20px;">
    <label style="color: #333; font-size: 18px;">Password</label>
    <input type="text" name="edit_password" value="<?php echo $row['password']?>" class="form-control" placeholder="Enter password" style="border: 2px solid #3498db; padding: 10px; font-size: 16px;">
  </div>
  
  <div style="text-align: center; margin-bottom: 20px;">
    <a href="register.php" class="btn btn-danger" style="background-color: #FF5733; color: #fff; border: none; padding: 10px 20px; margin-right: 10px; cursor: pointer; transition: background 0.3s; text-decoration: none;">CANCEL</a>
    <button type="submit" name="updatebtn" class="btn btn-primary" style="background-color: #3498db; color: #fff; border: none; padding: 10px 20px; cursor: pointer; transition: background 0.3s;">Update</button>
  </div>

</form>


      <?php
          }
       }
    ?>
            
        
    </div>
 </div>
</div>