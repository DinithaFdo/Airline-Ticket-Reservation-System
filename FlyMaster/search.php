<?php
    include_once 'import/header.php';
?>

<form class="form" action="index.php">
        <div>
            <label>
                <input type="radio" name="trip" value="one-way" checked onchange="toggleForm()"> One Way
            </label>
            <label>
                <input class="sbutton" type="radio" name="trip" value="round-trip" onchange="toggleForm()"> Round Trip
            </label>
            <button class="search" type="submit">Show Flights</button>
        </div>
        <div id="oneWayForm">
            <table class="table">
                <thead>
                    <tr>
                        <th>From</th>
                        <th>To</th>
                        <th>Depart</th>
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
                            <input type="number" name="passengers" min="1" max="5" value="1">
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
        <div id="roundTripForm" style="display: none;">
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
                            <input type="number" name="passengers" min="1" max="5" value="1">
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
    function toggleForm() {
        const oneWayForm = document.getElementById('oneWayForm');
        const roundTripForm = document.getElementById('roundTripForm');
        const tripType = document.querySelector('input[name="trip"]:checked').value;
        
        if (tripType === 'one-way') {
            oneWayForm.style.display = 'block';
            roundTripForm.style.display = 'none';
        } else if (tripType === 'round-trip') {
            oneWayForm.style.display = 'none';
            roundTripForm.style.display = 'block';
        }
    }
    </script>

<?php
    include_once 'import/footer.php'
?>