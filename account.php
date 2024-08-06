<?php
include_once 'import/header.php';



if (isset($_SESSION["fname"]) && isset($_SESSION["lname"]) && isset($_SESSION["username"]) && isset($_SESSION["email"])) {

    $fname = $_SESSION["fname"];
    $lname = $_SESSION["lname"];
    $uname = $_SESSION["username"];
    $email = $_SESSION["email"];

    include_once 'includes/dbh.inc.php';

    $sql = "SELECT * FROM users WHERE uname = '$uname'";
    $result = mysqli_query($conn, $sql);

    if ($result) {
        $userData = mysqli_fetch_assoc($result);
        $tel = $userData["tel"];
        $meal = $userData["meal"];
        $name = $userData["name"];
        $age = $userData["age"];
        $gender = $userData["gender"];
        $nation = $userData["nation"];
        $country = $userData["country"];
    } else {
        
        echo "Error: " . mysqli_error($conn);
    }
?>


<div class="manage-account-container" style="display: flex; justify-content: center; align-items: center; height: 100vh;">
    <div class="account-form">

    <h2>Welcome, <?php echo $fname . ' ' . $lname; ?></h2>
    <img src="images/profile.jpg" alt="Profile">

    <p><b>Username:</b> <?php echo $uname; ?></p>
    <p><b>Email:</b> <?php echo $email; ?></p>
    <p><b>First Name:</b> <?php echo $fname; ?></p>
    <p><b>Last Name:</b> <?php echo $lname; ?></p>
    <p><b>Name as in passport:</b> <?php echo $name; ?></p>
    <p><b>Phone Number:</b> <?php echo $tel; ?></p>
    <p><b>Prefered Meal Type:</b> <?php echo $meal; ?></p>
    <p><b>Age:</b> <?php echo $age; ?></p>
    <p><b>Gender:</b> <?php echo $gender; ?></p>
    <p><b>Nationality:</b> <?php echo $nation; ?></p>
    <p><b>Country:</b> <?php echo $country; ?></p>
    
   
    <button type="button" id="delete-account-button" onclick="deleteAccount()">Delete Account</button>
    <button class="form-button" type="submit" onclick="redirectToProfile()">Edit Profile</button>

    </div>
</div>


<?php
} else {
    echo '<div class="manage-account-container">';
    echo '<p>You are not logged in. Please <a href="login.php">log in</a> or <a href="signup.php">sign up</a>.</p>';
    echo '</div>';
}
?>

<script>
    function openDeleteConfirmation() {
        var modal = document.getElementById('deleteConfirmationModal');
        modal.style.display = 'block';
    }

    function closeDeleteConfirmation() {
        var modal = document.getElementById('deleteConfirmationModal');
        modal.style.display = 'none';
    }

    function deleteAccount() {
        window.location.href = 'del.confirm.php';
    }


    function redirectToProfile() {
    window.location.href = 'profile.php';
    }
</script>

<?php
include_once 'import/footer.php';
?>