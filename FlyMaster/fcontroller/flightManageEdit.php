
<?php
include "conn.php";

?>

<style>
    .form {
    background-color: #f0f0f0;
    border: 1px solid #ddd;
    padding: 20px;
    border-radius: 5px;
    width: 90%;
    margin: 0 auto;
    font-family: Arial, sans-serif;
}

.search {
    background-color: #007BFF;
    color: #fff;
    border: none;
    padding: 10px 20px;
    margin: 5px;
    cursor: pointer;
    border-radius: 5px;
}

.table {
    width: 100%;
    border-collapse: collapse;
    margin-top: 20px;
}

th, td {
    padding: 10px;
    text-align: left;
}

th {
    background-color: #007BFF;
    color: #fff;
}

select, input[type="date"], input[type="number"] {
    width: 100%;
    padding: 10px;
    margin: 5px 0;
    border: 1px solid #ddd;
    border-radius: 5px;
    font-size: 16px;
}


select[name="from"], select[name="to"] {
    background-color: #fff;
    color: #333;
}

button[type="submit"] {
    background-color: green;
    color: #fff;
    border: none;
    padding: 10px 20px;
    cursor: pointer;
    border-radius: 5px;
    margin-top: 20px;
}

.cancel{
    background-color: crimson;
    color: #fff;
    border: none;
    padding: 10px 20px;
    cursor: pointer;
    border-radius: 5px;
    margin-top: 20px;
    text-decoration: none;
}

button[type="submit"]:hover {
    background-color: #0056b3;
}


</style>

<?php
session_start();//-----



?>
<?php

if(isset($_GET['updateid'])){
    $cid=$_GET['updateid'];

    $_SESSION['id'] = $cid;
    // session

    $updatecareer="SELECT * FROM `flights` WHERE `pnr`='$cid'";
    
    $result=mysqli_query($conn,$updatecareer);
 
    if($result){
      // echo "Select Ok";
    }?>
    <?php
    while($row=mysqli_fetch_assoc($result)){
        // $FlID = $row['pnr'];
        $From = $row['from'];
        $To = $row['to'];
        $Airline = $row['airline'];
        $Seat = $row['seat'];
        $depart = $row['depart'];
        $return = $row['return'];
        $status = $row['status']; 
   
}}
?>




<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="UTF-8">
        <title>Registration Form</title>
        <link rel="stylesheet" href="rejister_styles.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body >

    <form class="form" action="update.php" method="POSt">
        <div>
            <button class="search" type="submit">Update Flight</button>
            <a class="cancel" href="flightManage.php">Cancel</a>
        </div>
            
        <div id="roundTripForm" >
            <table class="table">
                <thead>
                    <tr>
                        <th>From</th>
                        <th>To</th>
                        <th>Depart</th>
                        <th>Return</th>
                        <th>Passengers</th>
                        <th>Class</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                        <select name="from" required>
                            <option value="" disabled>Select a location</option>
                            <option value="lk" <?php if ($From == 'lk') echo 'selected'; ?>>Sri Lanka</option>
                            <option value="in" <?php if ($From == 'in') echo 'selected'; ?>>India</option>
                            <option value="sg" <?php if ($From == 'sg') echo 'selected'; ?>>Singapore</option>
                            <option value="gb" <?php if ($From == 'gb') echo 'selected'; ?>>London</option>
                            <option value="us" <?php if ($From == 'us') echo 'selected'; ?>>United States</option>
                        </select>

                        </td>
                        <td>
                        <select name="to" required>
                            <option value="" disabled>Select a destination</option>
                            <option value="lk" <?php if ($To == 'lk') echo 'selected'; ?>>Sri Lanka</option>
                            <option value="in" <?php if ($To == 'in') echo 'selected'; ?>>India</option>
                            <option value="sg" <?php if ($To == 'sg') echo 'selected'; ?>>Singapore</option>
                            <option value="gb" <?php if ($To == 'gb') echo 'selected'; ?>>London</option>
                            <option value="us" <?php if ($To == 'us') echo 'selected'; ?>>United States</option>
                        </select>

                        </td>
                        <td>
                            <input type="date" value="<?php echo $depart; ?>" name="depart">
                        </td>
                        <td>
                            <input type="date" value="<?php echo $return; ?>" name="return">
                        </td>
                        <td>
                            <input type="number" name="passengers" min="1" max="8000" value="<?php echo $Seat; ?>">
                        </td>
                        <td>
                        <select name="class">
                            <option value="economy" <?php if ($Airline == 'economy') echo 'selected'; ?>>Economy</option>
                            <option value="business" <?php if ($Airline == 'business') echo 'selected'; ?>>Business</option>
                            <option value="first-class" <?php if ($Airline == 'first-class') echo 'selected'; ?>>First Class</option>
                        </select>

                        </td>
                        <td>
                        <input type="number" name="status" min="0" max="1" value="<?php echo $status; ?>">
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </form>

    <script>
document.addEventListener("DOMContentLoaded", function() {
    const fromSelect = document.querySelector("select[name='from']");
    const toSelect = document.querySelector("select[name='to']");

  
    document.querySelector("form").addEventListener("submit", function(event) {
       
        if (fromSelect.value === toSelect.value) {
          
            event.preventDefault();
            
            alert("Please select different 'From' and 'Where To' locations.");
        }
    });
});
</script>





























        <!--  -->
        </div>
    </body>
</html>

