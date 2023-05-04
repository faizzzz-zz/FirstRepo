<?php
$host = 'localhost';  
$user = 'root';  
$pass = '';  
$dbname='Users';
  
$conn = mysqli_connect($host, $user, $pass,$dbname);  
if(!$conn){  
  die('Could not connect: '.mysqli_connect_error());  
}  
echo 'Connected successfully<br/>';  
  $conn = mysqli_connect($host,$user,$pass);
if(!$conn )  
{  
  die('Could not connect: ' . mysqli_error());  
}  
echo 'Connected successfully <br/>';  

// PHP Mysqli Create Database Example

$sql = 'CREATE Database Users';  
if(mysqli_query( $conn,$sql)){  
  echo "Database created successfully.";  
}
else{  
echo "Sorry, database creation failed ".mysqli_error($conn);  
}  

$sql = "create table users(id INT AUTO_INCREMENT,name VARCHAR(20) NOT NULL,  
email VARCHAR(20) NOT NULL,phone VARCHAR(20) UNIQUE,
bgroup VARCHAR(3) NOT NULL,primary key (id))";  
if(mysqli_query($conn, $sql)){  
 echo "Table created successfully";  
}else{  
echo "Could not create table: ". mysqli_error($conn);  
}  
  
mysqli_close($conn);  
?> 