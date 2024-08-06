<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fly Master</title>

    <link rel="stylesheet" href="CSS/styles.css">
    <link rel="stylesheet" href="CSS/aboutus.css">
    <link rel="stylesheet" href="CSS/login.css">
    <link rel="stylesheet" href="CSS/contact.css">
    <link rel="stylesheet" href="CSS/account.css">

    <link rel="icon" href="../images/logo.png">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia">

    <script>
        
        document.addEventListener('DOMContentLoaded', function () {
            const fromSelect = document.querySelector('select[name="from"]');
            const toSelect = document.querySelector('select[name="to"]');
            
            toSelect.addEventListener('change', function () {
                if (fromSelect.value === toSelect.value) {
                    alert("From and To countries cannot be the same.");
                    
                }
            });
        });

        
        document.addEventListener('DOMContentLoaded', function () {
        const navLinks = document.querySelectorAll('.nav a');
        const currentURL = window.location.href;

        
        function setActiveLink() {
            navLinks.forEach(link => {
                const linkURL = link.href;

                if (currentURL === linkURL) {
                    link.classList.add('active');
                } else {
                    link.classList.remove('active');
                }
            });
        }

        
        setActiveLink();

        
        navLinks.forEach(link => {
            link.addEventListener('click', function (event) {
                
                navLinks.forEach(link => {
                    link.classList.remove('active');
                });

                
                link.classList.add('active');
            });
        });
    });

                
        var modal = document.getElementById('id01');
        var modal = document.getElementById('id02');
        

        
        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }
        
        
        function cancelLogin() {
         window.location.href = 'index.php';
        }

    </script>
  
        
</head>
<body>
    <div class="header">
    <div class="left">
        <a href="index.php"><img src="images/logo.png" alt="logo" class="logo"></a>
        <h6 class="title">Fly Master</h6>
        <?php
        if (isset($_SESSION["fname"])) {
            
            echo '<a href="account.php" class="signprofile"><img src="images/profile.jpg" alt="logo" class="profile"></a>';
        } else {
            
            echo '<a href="#" class="signprofile" onclick="document.getElementById(\'id01\').style.display=\'block\'"><img src="images/profile.jpg" alt="logo" class="profile"></a>';
        }
        ?>
    </div>
</div>


        <div class="topnav" id="myTopnav">
    
    <a class="click" style="color: black;" href="support.php">Support</a>
    <?php
    if (isset($_SESSION["fname"])) {
        
        echo '<a class="sbutton" href="includes/logout.inc.php">Sign Out</a>';
        echo '<a class="ubutton" href="account.php">Manage ' . $_SESSION["fname"] . '\'s Account</a>'; // Display "Manage [First Name]'s Account" here

    } else {
        echo '<a href="#" class="login-button" id="signin" onclick="document.getElementById(\'id01\').style.display=\'block\'" style="width:auto;">Sign up or Login</a>';
    }
    ?>
    </div>

          
          <div class="nav" id="nav">
            <a href="index.php" class="click" style="color: black;">Home</a>
            <a href="bookticket.php" class="click" style="color: black;">Ticket Booking</a>
            <a href="contactus.php" class="click" style="color: black;">Contact Us</a>
            <a href="aboutus.php" class="click" style="color: black;">About Us</a>
         </div>
    </div>

    <div class="section">