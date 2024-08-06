<?php
    include_once 'import/header.php';
?>

<section class="section" style="background-image: url('images/logo1.jpg');">
<div id="signup" class="signup">
  
  <form class="modal-content animate" action="includes/signup.inc.php" method="post" style="width: 600px; height: auto;">
    <div class="imgcontainer">
      <span onclick="cancelLogin()" class="close" title="Close Modal">&times;</span>
      <img src="images/uprofile.png" alt="Avatar" class="avatar">
    </div>

<div class="container">
      <label for="fname"><b>First Name</b></label>
      <input type="text" placeholder="Enter your First name" name="fname" required>

      <label for="lname"><b>Last Name</b></label>
      <input type="text" placeholder="Enter your Last name" name="lname" required>

      <label for="uname"><b>User Name</b></label>
      <input type="text" placeholder="Enter your User name" name="uname"  required>
      
      <label for="email"><b>Email</b></label>
      <input type="text" placeholder="Enter your Email Address" name="email" required>

      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Password" name="psw" required>

      <label for="pswrepeat"><b>Confirm Password</b></label>
      <input type="password" placeholder="Re-enter your password" name="pswrepeat" required>
        
      <button type="submit" name="signup" class="login-button">Creat account</button>
    </div>

    <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="cancelLogin()" class="cancelbtn">Cancel</button>
      <span class="psw">Already Have an Account? <a href="redirect.login.php">Log In</a></span>
    </div>
  </form>
</div> 
</section>

<?php
    include_once 'import/footer.php';
?>