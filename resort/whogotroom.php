<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="//netdna.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
  <title>ADMIN</title>
</head>

<body>
  <header>
    <div class="navbar">
      <nav>
        <ul>
          <li id="title"><a href="Login.php">Logout</a></li>
          <li><a href="index.php"> Home </a></li>
          <li><a href="mreview.php"> Review </a></li>
          <li><a href="msg.php"> Messages </a></li>
          <li><a href="mroomview.php"> Rooms </a></li>
          <li><a href="managerview.php">Requested Rooms</a></li>
          <li><a href="assignroom.php"> Assign Room </a></li>
          <li><a href="whogotroom.php"> who got Room </a></li>
           <!-- Add this line -->
          
        </ul>
      </nav>
    </div>
  </header>
<?php
include_once "connect.php";

if (!mysqli_connect_errno()) {
    // Perform an INNER JOIN between request_room and assigned_rooms based on customer_id and room_no
    $joinQuery = "SELECT r.id, r.name, r.email, r.phone, r.a_date, r.d_date, r.people,r.room_type, ar.room_id
                 FROM assigned_rooms ar
                 INNER JOIN request_room r ON ar.customer_id = r.id";

    $result = mysqli_query($con, $joinQuery);

    if ($result) {
        echo '<h1>ROOM ASSIGNED</h1>';

        echo '<table>';
        echo '<thead>';
        echo '<th>Customer ID</th>';
        echo '<th>Name</th>';
        echo '<th>Email</th>';
        echo '<th>Phone</th>';
        echo '<th>Arrive Date</th>';
        echo '<th>Depart Date</th>';
        echo '<th>Number of People</th>';
        echo '<th>Room Type</th>';
        echo '<th>Room No</th>';
        echo '</thead>';
        echo '<tbody>';

        while ($row = mysqli_fetch_assoc($result)) {
            echo '<tr>';
            echo '<td>' . $row['id'] . '</td>';
            echo '<td>' . $row['name'] . '</td>';
            echo '<td>' . $row['email'] . '</td>';
            echo '<td>' . $row['phone'] . '</td>';
            echo '<td>' . $row['a_date'] . '</td>';
            echo '<td>' . $row['d_date'] . '</td>';
            echo '<td>' . $row['people'] . '</td>';
            echo '<td>' . $row['room_type'] . '</td>';
            echo '<td>' . $row['room_id'] . '</td>';
            echo '</tr>';
        }

        echo '</tbody>';
        echo '</table>';
    } else {
        echo 'No matching records found.';
    }

    mysqli_close($con);
}
?>
