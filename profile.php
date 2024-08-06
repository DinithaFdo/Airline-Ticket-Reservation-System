<?php
include_once 'import/header.php';
?>

<div class="manage-account-container">
        <h2>Manage Your Account</h2>
    
        <div class="user-profile">
            <img src="user-profile.jpg" alt="Profile Picture">
            <input type="file" class="upload-button" id="profile-image" name="pic" accept="image/*">
    
        </div>
      
        <form class="account-form" action="includes/update.inc.php" method="POST">
            <div class="form-group">
                <label for="first-name">First Name</label>
                <input type="text" id="first-name" name="first-name" value="John" required>
            </div>
            <div class="form-group">
                <label for="last-name">Last Name</label>
                <input type="text" id="last-name" name="last-name" value="Doe" required>
            </div>
            <div class="form-group">
                <label for="phone-number">Phone Number</label>
                <input type="tel" id="phone-number" name="phone-number" placeholder="Enter your phone number">
            </div>
            
            <div class="form-group">
                <label for="meal-type">Meal Type</label>
                <select id="meal-type" name="meal-type">
                    <option value="vege">Vegetarian</option>
                    <option value="non-vege">Non-Vegetarian</option>
                </select>
            </div>
            <div class="form-group">
                <label for="passport-name">Name as in Passport</label>
                <input type="text" id="passport-name" name="passport-name" required>
            </div>
            <div class="form-group">
                <label for="age">Age</label>
                <input type="number" id="age" name="age" required>
            </div>
            <div class="form-group">
                <label for="gender">Gender</label>
                <select id="gender" name="gender">
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                    <option value="other">Other</option>
                </select>
            </div>
            <div class="form-group">
                <label for="nationality">Nationality</label>
                <input type="text" id="nationality" name="nationality" required>
            </div>
            <div class="form-group">
                <label for="country">Country</label>
                <input type="text" id="country" name="country" required>
            </div>
            
            <button type="button" id="delete-account-button" onclick="redirectdelete()">Delete Account</button>
            <button id="form-button" name="save" type="submit" onclick="redirectToUpdate()">Save Changes</button>
        </form>
    </div>

<script>
    function redirectdelete()
    {
        window.location.href='del.confirm.php';
    }
</script>

<?php
    include_once 'import/footer.php';
?>