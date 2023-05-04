
<html>
<body>
<?php
$host = 'localhost';  
$user = 'root';  
$pass = '';  
$dbname = 'users';  

  $conn = mysqli_connect($host, $user, $pass,$dbname);
  if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }
  
  // Collect data from the form
  $name = $_POST['myName'];
  $email = $_POST['myEmail'];
  $password = $_POST['myPassword'];

  // Prepare the SQL query
  $sql = "INSERT INTO users (name, email, password) VALUES ('$name', '$email', '$password')";
  
  // Execute the SQL query
  if (mysqli_query($conn, $sql)) {
    echo "Data inserted successfully.";
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }

  $file = 'signIn.html';

// Set the content type header
header('Content-type: text/html');

// Output the contents of the HTML file
readfile($file);
  mysqli_close($conn);
  ?>
</body>
</html>