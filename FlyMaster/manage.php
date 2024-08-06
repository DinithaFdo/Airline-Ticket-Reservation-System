
<?php
include_once 'import/header.php';
?>


<?php
    include_once 'import/heading.php';
?>

<?php
    include_once 'import/select.php';
?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="css/manage.css"> <!-- Link to the external CSS file -->
</head>
<body>

<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "flymaster_login";


$conn = mysqli_connect($servername, $username, $password, $dbname);


if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}


if (isset($_POST['booking_id'])) {
    $booking_id = $_POST['booking_id'];


    $stmt = $conn->prepare("SELECT * FROM booking WHERE booking_ID = ?");
    $stmt->bind_param("s", $booking_id);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        
        echo '<div class="shadow-box">';
        while ($row = $result->fetch_assoc()) {
            echo'<p class="qresult">';
            echo "Booking ID : " . $row["booking_ID"] . "<br>";
            echo "Customer Name : " . $row["name"] . "<br>";
            echo "Airline: " . $row["airline"] . "<br>";
            echo "Seat Number : " . $row["seat_number"] . "<br>";
            echo "From : " . $row["from"] . "<br>";
            echo "TO : " . $row["to"] . "<br>";
            echo "Meal Preference : " . $row["meal"] . "<br>";
            echo'</p>';
            
            echo '<form method="post" action="includes/del.manage.inc.php">'; 
            echo '<input type="hidden" name="booking_id" value="' . $booking_id . '">';
            echo '<button class="delete-button" type="submit" name="delete">Delete</button>';
            echo '</form>';
            echo '<button class="update-button" name="meal" onclick="changeMeal()">Change Meal</button>';
        
        }
        echo '</div>'; 
    } else {
        echo'<div class="box" >';
        echo "<h2 class='errmsg'>&#x26D4; No booking found with the given ID. &#x26D4;</h2>";
        echo'</div>';
    }

    $stmt->close();
}

$conn->close();
?>

</body>
</html>


<div class="form">
        <h1 class="mbheading">Manage Booking</h1>
        <form action="" method="post">
            <label class="label1" for="booking_id">Booking ID:</label>
            <input type="text" id="booking_id" name="booking_id" required placeholder="1020">
            <button class="login-button" name="submit" type="submit">View Booking</button>
        </form>
        <p>&copy; 2023 FLY MASTER</p>

</div>

<script>
    function changeMeal(){
        window.location.href = 'includes/meal.php';
    }
</script>


<?php
include_once 'import/footer.php';
?>
