<?php
    include_once 'import/header.php';
?>

<?php
        if (isset($_SESSION['fname'])) {
            echo '

            <div class="manage-account-container">
                <h2>Check Flight Status</h2>
                <!-- Account information form -->
                <form class="account-form" action="includes/update.inc.php" method="POST">
                <div class="form-group">
                <label for="first-name">Enter Airline Booking Reference (PNR)</label>
                <input type="text" id="pnr" name="pnr" required>
                 </div>

                <button id="form-button" name="submit" type="submit"">Check Status</button>
                 </form>
           </div>
            
            ';
        }

        else {
            echo 
            '<script>window.alert("Please log in to check in"); window.location.href = "redirect.login.php";</script>';
        }
?>

<?php
    include_once 'import/footer.php';
?>