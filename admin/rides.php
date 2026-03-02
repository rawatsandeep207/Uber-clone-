<?php
require_once '../dp.php';
$sql = "SELECT * FROM rides";
$result = mysqli_query($conn, $sql);
if (!$result) {
  die("Query Failed: " . mysqli_error($conn));
}
?>
<!DOCTYPE html>
<html>

<head>
  <title>Ride List</title>

  <style>
    body {
      font-family: Arial;
      background: #f4f6f9;
      margin: 0;
    }

    .container {
      padding: 40px;
    }

    h2 {
      text-align: center;
    }

    table {
      width: 100%;
      border-collapse: collapse;
      background: white;
      box-shadow: 0 5px 10px rgba(0, 0, 0, 0.1);
    }

    th {
      background: black;
      color: white;
      padding: 12px;
    }

    td {
      padding: 10px;
      text-align: center;
    }

    tr:nth-child(even) {
      background: #f2f2f2;
    }

    tr:hover {
      background: #ddd;
    }
  </style>

</head>

<body>

  <div class="container">
    <h2>All Ride Users</h2>

    <table>
      <tr>
        <th>User Id</th>
        <th>Pickup Location</th>
        <th>Drop Location</th>
      </tr>

      <?php
      if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
          echo "<tr>
                <td>" . $row['User_Id'] . "</td>
                <td>" . $row['Pickup_location'] . "</td>
                <td>" . $row['Drop_location'] . "</td>
              </tr>";
        }
      } else {
        echo "<tr><td colspan='3'>No Rides Found</td></tr>";
      }
      ?>

    </table>
  </div>

</body>

</html>