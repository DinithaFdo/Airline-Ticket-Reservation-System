<?php
session_start();
?>

<div class="modal fade" id="adminprofile" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header" style="padding:5px; background-color: #333; color: #fff;">
        <h3 class="modal-title" id="exampleModalLabel">Add Admin Data</h3>
      </div>
      <form action="code.php" method="POST">
        <div style="box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);">

        <div class="form-group">
          <label style="color: #333; font-size: 18px; font-weight: bold;">Username</label>
         <input type="text" name="username" class="form-control" placeholder="Enter Username" style="border: 2px solid #333; padding: 10px; font-size: 16px;">
        </div>
        <div class="form-group">
          <label style="color: #333; font-size: 18px; font-weight: bold;">Email</label>
          <input type="text" name="email" class="form-control" placeholder="Enter Email" style="border: 2px solid #333; padding: 10px; font-size: 16px;">
        </div>
        <div class="form-group">
          <label style="color: #333; font-size: 18px; font-weight: bold;">Password</label>
          <input type="text" name="password" class="form-control" placeholder="Enter password" style="border: 2px solid #333; padding: 10px; font-size: 16px;">
        </div>
        <div class="form-group">
          <label style="color: #333; font-size: 18px; font-weight: bold;">Confirm Password</label>
          <input type="text" name="comfirmpassword" class="form-control" placeholder="Enter confirm password" style="border: 2px solid #333; padding: 10px; font-size: 16px;">
        </div>

        </div>
      </div>
      <div class="modal-footer">
  <button type="button" class="btn btn-secondary" data-dismiss="modal" style="background-color: #333; color: #fff; border: none; padding: 10px 20px; margin-right: 10px; cursor: pointer; transition: background 0.3s;">Close</button>
  <button type="submit" name="registerbtn" class="btn btn-primary" style="background-color: #3498db; color: #fff; border: none; padding: 10px 20px; cursor: pointer; transition: background 0.3s;">Save</button>
</div>

      </form>
    </div>
  </div>
</div>

<div class="container-fluid">
  <div class="card shadow mb-4">
    <div class="card-header py-3" style="background-color: #333; color: #fff;">
      <h4 class="m-0 font-weight-bold text-primary">Admin Profile
      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#adminprofile" style="background-color: #3498db; color: #fff; border: none; padding: 10px 20px; margin: 10px; cursor: pointer; transition: background 0.3s;">
  Add Admin Profile
</button>

      </h4>
    </div>
    <div class="card-body">
      <?php
      if (isset($_SESSION['success']) && $_SESSION['success'] != '') {
        echo '<h2 style="background-color: #4CAF50; color: #fff;">' . $_SESSION['success'] . '</h2>';
        unset($_SESSION['success']);
      }

      if (isset($_SESSION['status']) && $_SESSION['status'] != '') {
        echo '<h2 style="background-color: #FF5733; color: #fff;">' . $_SESSION['status'] . '</h2>';
        unset($_SESSION['status']);
      }
      ?>

      <div class="card shadow mb-4" style="box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);">
        <?php
        $connection = mysqli_connect("localhost", "root", "", "flymaster_login");

        $query = "SELECT * FROM users";
        $query_run = mysqli_query($connection, $query);
        ?>

        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>Id</th>
              <th>Username</th>
              <th>Email</th>
              <th>Password</th>
              <th>EDIT</th>
              <th>DELETE</th>
            </tr>
          </thead>

          <tbody>
            <?php
            if (mysqli_num_rows($query_run) > 0) {
              while ($row = mysqli_fetch_assoc($query_run)) {
            ?>
                <tr>
                    <td><?php echo $row['uid']; ?></td>
                    <td><?php echo $row['uname']; ?></td>
                    <td><?php echo $row['email']; ?></td>
                    <td><?php echo $row['password']; ?></td>
                    <td>
                      <form action="register_edit.php" method="POST">
                        <input type="hidden" name="edit_id" value="<?php echo $row['uid']; ?>">
                        <button type="submit" name="edit_btn" class="btn btn-success" style="background-color: #4CAF50; color: #fff; border: none; padding: 5px 10px; cursor: pointer; transition: background 0.3s;">EDIT</button>
                      </form>
                    </td>
                    <td>
                      <form action="code.php" method="POST">
                        <input type="hidden" name="delete_id" value="<?php echo $row['uid']; ?>">
                        <button type="submit" name="delete_btn" class="btn btn-danger" style="background-color: #FF5733; color: #fff; border: none; padding: 5px 10px; cursor: pointer; transition: background 0.3s;">DELETE</button>
                      </form>
                    </td>
                  </tr>

            <?php
              }
            } else {
              echo "No Record Found";
            }
            ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
