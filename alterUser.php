<?php  
$host = 'localhost';  
$user = 'root';  
$pass = '';  
$dbname = 'Users';  
  
$conn = mysqli_connect($host, $user, $pass,$dbname);  
if(!$conn){  
  die('Could not connect: '.mysqli_connect_error());  
}  
echo 'Connected successfully<br/>';  
  
$sql = "ALTER TABLE Users drop column bgroup";  
if(mysqli_query($conn, $sql)){  
 echo "Column dropped successfully";  
}else{  
echo "Could not drop table column : ". mysqli_error($conn);  
}  
  
mysqli_close($conn);  
?> 