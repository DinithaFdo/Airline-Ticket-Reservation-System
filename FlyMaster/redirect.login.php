<?php
    include_once 'import/header.php';
?>

    <form class="modal-content animate" action="includes/login.inc.php" method="post" style="width:500px; height:auto;">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
      <img src="images/uprofile.png" alt="Avatar" class="avatar">
    </div>

<div class="container">
      <label for="uname"><b>Username or Email</b></label>
      <input type="text" placeholder="Enter Username" name="uname" required>

      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="psw" required>
        
      <button type="submit" name="login" class="login-button">Login</button>
      <label>
        <input type="checkbox" checked="checked" name="remember"> Remember me
      </label>
    </div>

    <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
      <span class="psw">&nbsp&nbsp&nbspForgot <a href="forgotpas.php">password?</a></span>
      <p style="text-align: right;" class="psw">New To The Site&nbsp<a href="signup.php">Create an account</a></p>
    </div>
  </form>

<?php
    include_once 'import/footer.php';
?>