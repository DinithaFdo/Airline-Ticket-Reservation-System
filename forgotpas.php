<?php
    include_once 'import/header.php';
?>

<form class="modal-content animate" action="includes/resetpas.inc.php" method="post" style="width:500px; height:auto;">
    <div class="imgcontainer">
        <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
        <img src="images/uprofile.png" alt="Avatar" class="avatar">
    </div>

    <div class="container">
        <label for="forgot"><b>Username or Email</b></label>
        <input type="text" placeholder="Enter Username or Email" name="forgot" required>

        <label for="uname"><b>New Password</b></label>
        <input type="password" placeholder="Enter New Password" name="new_password" required>

        <label for="psw"><b>Confirm New Password</b></label>
        <input type="password" placeholder="Confirm New Password" name="confirm_password" required>

        <button type="submit" name="reset_password" class="login-button">Reset Password</button>
    </div>

    <div class="container" style="background-color:#f1f1f1">
        <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
        <span class="psw">Remembered your password? <a href="redirect.login.php">Login here</a></span>
        <p style="text-align: right;" class="psw">New To The Site&nbsp<a href="signup.php">Create an account</a></p>
    </div>
</form>

<?php
    include_once 'import/footer.php';
?>