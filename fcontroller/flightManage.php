<?php include "conn.php"; ?>


<html>
  <head>
    <title>Flight Management</title>
    <style>
      table {
        margin-left: auto;
        margin-right: auto;
        border-collapse: collapse;
        width: 80%;
      }
      
      th, td {
        font-size: 20px;
        padding: 10px;
        text-align: center;
      }
      
      th {
        background-color: #4287f5;
        color: white;
      }
      
      tr:nth-child(even) {
        background-color: #f2f2f2;
      }
      
      tr:hover {
        background-color: #d9d9d9;
      }
      
      #update {
        background-color: #4287f5;
        color: white;
        padding: 5px 10px;
        text-decoration: none;
      }
      
      #delete {
        background-color: #e83f3f;
        color: white;
        padding: 5px 10px;
        text-decoration: none;
      }

      #new{
        background-color: forestgreen;
        color: white;
        padding: 10px 20px;
        text-decoration: none;
      }
      
      h2 {
        text-align: center;
        font-size: 30px;
      }
    </style>
  </head>
  <body>
    <h2>Admin Manage Flights</h2>
   <div>
    <a href="newFlight.php" id="new">Add New</a>
   </div>
    <table border="1">
      <thead>
        <tr>
          <th>Id</th>
          <th>Air Line</th>
          <th>No of Seats</th>
          <th>From</th>
          <th>NTo</th>
          <th>Departure</th>
          <th>Return</th>
          <th>Status</th>
          <th>Edit</th>
          <th>Delete</th>
        </tr>
      </thead>
      <tbody>
        <?php
        // Retrieve data from the database
        $query = "SELECT * FROM `flights`";
        $result = mysqli_query($conn, $query);

        // Populate the HTML template with data
        while ($row = mysqli_fetch_assoc($result)) {
          $FlID = $row['pnr'];
          $Airline = $row['airline'];
          $Seat = $row['seat'];
          $From = $row['from'];
          $To = $row['to'];
          $depart = $row['depart'];
          $return = $row['return'];
          $status = $row['status'];

          ?>
          <tr>
            <td><?php echo $FlID; ?></td>
            <td><?php echo $Airline; ?></td>
            <td><?php echo $Seat; ?></td>
            <td><?php echo $From; ?></td>
            <td><?php echo $To; ?></td>
            <td><?php echo $depart; ?></td>
            <td><?php echo $return; ?></td>
            <td><?php echo $status; ?></td>
            <td>
              <a href="flightManageEdit.php?updateid=<?php echo $FlID; ?>" id="update">Edit</a>
            </td>
            <td>
              <a href="flightManageDelete.php?deleteid=<?php echo $FlID; ?>" id="delete">Delete</a>
            </td>
          </tr>
        <?php
        }
        ?>
      </tbody>
    </table>

  </body>
</html>

