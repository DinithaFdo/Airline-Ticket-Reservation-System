<?php
include_once 'import/header.php';
?>

<div class="manage-account-container">
    <h2>Confirm Account Deletion</h2>
    <p style="text-align: center;">Are you sure you want to delete your account? This action cannot be undone.</p>
    <form action="includes/deactivate.inc.php" method="POST">
    <div style="display: flex; margin: 20px; justify-content: center; align-items: center; text-align: center;">
    <button id="delete-account-button" type="submit" name="confirm">Yes, Delete Account</button>
    <div style="margin: 10px;"></div>
    <button style="background-color: #04AA6D;
        color: #fff;
        border: none;
        padding: 10px 20px;
        border-radius: 5px;
        font-size: 16px;
        cursor: pointer;
        transition: background-color 0.3s ease;" type="button" name="cancel" onclick="redirectToAccount()">No, Navigate Home</button>
</div>


        
    </form>
</div>

<script>
function redirectToAccount() {
    window.location.href = 'account.php';
}
</script>



<?php
include_once 'import/footer.php';
?>
