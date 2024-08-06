
     <?php include "conn.php"; ?>


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

<form class="form" action="newInput.php" method="POSt">
        <div>
            <button class="search" type="submit">Insert New Flights</button>
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
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <select name="from" required>
                                <option value="" selected disabled>From</option>
                                <option value="lk">Sri Lanka</option>
                                <option value="in">India</option>
                                <option value="sg">Singapore</option>
                                <option value="gb">London</option>
                                <option value="us">United States</option>
                            </select>
                        </td>
                        <td>
                            <select name="to" required>
                                <option value="" selected disabled>Where To</option>
                                <option value="lk">Sri Lanka</option>
                                <option value="in">India</option>
                                <option value="sg">Singapore</option>
                                <option value="gb">London</option>
                                <option value="us">United States</option>
                            </select>
                        </td>
                        <td>
                            <input type="date" name="depart">
                        </td>
                        <td>
                            <input type="date" name="return">
                        </td>
                        <td>
                            <input type="number" name="passengers" min="1" max="8000" value="1">
                        </td>
                        <td>
                            <select name="class">
                                <option value="economy">Economy</option>
                                <option value="business">Business</option>
                                <option value="first-class">First Class</option>
                            </select>
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

    
    

<?php

?>