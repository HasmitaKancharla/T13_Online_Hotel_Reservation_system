<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie-edge">
   <link rel="stylesheet" href="style.css">
   <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
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
            </ul>
         </nav>
      </div>
   </header>

   <?php
   include_once "connect.php";

   if (!mysqli_connect_errno()) {
       $reviews = mysqli_query($con, "SELECT * FROM request_room ORDER BY id");

       // Use SQL COUNT aggregate function to get the total number of records
       $result = mysqli_query($con, "SELECT COUNT(*) AS total_records FROM request_room");
       $row = mysqli_fetch_assoc($result);
       $totalRecords = $row['total_records'];

       // Use SQL COUNT and GROUP BY to get the count for each room type
       $roomTypeCounts = mysqli_query($con, "SELECT room_type, COUNT(*) AS count FROM request_room GROUP BY room_type");

       // Use SQL SUM aggregate function to calculate the total number of people
       $totalPeopleResult = mysqli_query($con, "SELECT SUM(people) AS total_people FROM request_room");
       $totalPeopleRow = mysqli_fetch_assoc($totalPeopleResult);
       $totalPeople = $totalPeopleRow['total_people'];

       mysqli_close($con);
   }
   ?>

   <center><h1>Requested Room Table</h1></center>

   <table>
      <thead>
         <th>ID</th>
         <th>Name</th>
         <th>Email</th>
         <th>Phone</th>
         <th>Arrive Date</th>
         <th>Depart Date</th>
         <th>Number of People</th>
         <th>Room Type</th>
      </thead>

      <tbody>
        <?php
          foreach ($reviews as $review) {
        ?>
            <tr>
              <td> <?php echo $review['id'];?></td>
              <td> <?php echo $review['name'];?></td>
              <td> <?php echo $review['email'];?></td>
              <td> <?php echo $review['phone'];?></td>
              <td> <?php echo $review['a_date'];?></td>
              <td> <?php echo $review['d_date'];?></td>
              <td> <?php echo $review['people'];?></td>
              <td> <?php echo $review['room_type'];?></td>
            </tr>
        <?php
          };
        ?>
      </tbody>
   </table>

   <!-- Display the total number of records at the bottom of the page -->
   <div class="total-records">
      Total Records: <?php echo $totalRecords; ?>
   </div>

   <!-- Display the count for each room type -->
   <div class="room-type-counts">
      Room Type Counts:
      <ul>
        <?php
          while ($row = mysqli_fetch_assoc($roomTypeCounts)) {
            echo "<li>" . $row['room_type'] . ": " . $row['count'] . "</li>";
          }
        ?>
      </ul>
   </div>

   <!-- Display the total number of people -->
   <div class="total-people">
      Total People Requested: <?php echo $totalPeople; ?>
   </div>
</body>
</html>
