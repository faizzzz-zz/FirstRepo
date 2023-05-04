<?php
$host = 'localhost';  
$user = 'root';  
$pass = '';  
$dbname='book_grd';
  
$conn = mysqli_connect($host, $user, $pass,$dbname);  
if(!$conn){  
  die('Could not connect: '.mysqli_connect_error());  
}  
echo 'Connected successfully<br/>';  
  
$sql = "create table Ground(Id INT AUTO_INCREMENT,Ground_Name VARCHAR(20) NOT NULL,  
Ground_Status CHAR(1) NOT NULL,Ground_Capacity INT,
primary key (id))";  
if(mysqli_query($conn, $sql)){  
 echo "Table created successfully";  
}else{  
echo "Could not create table: ". mysqli_error($conn);  
}  
  
mysqli_close($conn);  
?> 