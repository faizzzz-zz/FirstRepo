<?php
// Set up MySQL database connection
$host = 'localhost';  
$user = 'root';  
$pass = '';  
$dbname = 'book_grd';  

  $conn = mysqli_connect($host, $user, $pass,$dbname);
  if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }
  

// Prepare the SQL query
$sql = "SELECT * FROM book_grd";

// Execute the SQL query
$result = mysqli_query($conn, $sql);

// Check if any rows were returned
if (mysqli_num_rows($result) > 0) {
  // Output data of each row
  while($row = mysqli_fetch_assoc($result)) {
    echo "Ground Name: " . $row["Ground_Name"]. " - Event Name " . $row["Event_Name"]. " - Number of Participants : " . $row["Num_Participants"]. "<br>";
  }
} else {
  echo "No data found.";
}

// Close the database connection
mysqli_close($conn);
?>
