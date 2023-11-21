<?php
include_once "connect.php";

if (!mysqli_connect_errno()) {
    // Perform a natural join between request_room and assigned_rooms
    $naturalJoinQuery = "SELECT *
                         FROM request_room
                         NATURAL JOIN assigned_rooms";

    $result = mysqli_query($con, $naturalJoinQuery);

    if ($result) {
        echo '<h1>Natural Join: Requested Rooms and Assigned Rooms</h1>';

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
        echo '</thead>';
        echo '<tbody>';

        while ($row = mysqli_fetch_assoc($result)) {
            echo '<tr>';
            echo '<td>' . $row['customer_id'] . '</td>';
            echo '<td>' . $row['name'] . '</td>';
            echo '<td>' . $row['email'] . '</td>';
            echo '<td>' . $row['phone'] . '</td>';
            echo '<td>' . $row['a_date'] . '</td>';
            echo '<td>' . $row['d_date'] . '</td>';
            echo '<td>' . $row['people'] . '</td>';
            echo '<td>' . $row['room_type'] . '</td>';
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
