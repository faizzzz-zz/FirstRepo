
<html>
<body>
<?php
$host = 'localhost';  
$user = 'root';  
$pass = '';  
$dbname = 'book_grd';  

  $conn = mysqli_connect($host, $user, $pass,$dbname);
  if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }
  
  // Collect data from the form
  $ename1 = $_POST['event_name1'];
  $ename2 = $_POST['event_name2'];
  $bdate = $_POST['booking_date'];
  $btime = $_POST['booking_time'];
  $numP = $_POST['num_participants'];


  // Prepare the SQL query
  $sql = "INSERT INTO book_grd (Ground_Name, Event_Name, Booking_Date,Booking_Time,Num_Participants) VALUES ('$ename1', '$ename2', '$bdate','$btime','$numP')";
  
  // Execute the SQL query
  if (mysqli_query($conn, $sql)) {
    echo "Data inserted successfully.";
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
  if($ename1=="Cricket Ground"){
    $id=1;
  }
  $sql="UPDATE ground set Ground_Status='N' where Id=id";
  if (!mysqli_query($conn, $sql)) {
    
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
    
 
$sql = "SELECT Id, Ground_Status from ground";

if(!mysqli_query($conn, $sql)){   
echo "Could not fetch table: ". mysqli_error($conn);  
}  

$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {

$i=0;
while($row = mysqli_fetch_assoc($result)) {
$i++;
$id=$row["Id"];
$s=$row["Ground_Status"];
if($id==$i && $s=='N' ){
 }

}
}
  // Close the database connection
  mysqli_close($conn);
  ?>
</body>
</html>