<?php
$servername = "localhost";
$username = "root";
$password = "Kajal@123456";
$dbname = "form";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
else{
	
$firstname = $_POST['name'];
$father_name = $_POST['fathername'];
$email = $_POST['email'];
$dob = $_POST['DOB'];
$country = $_POST['country'];
$stdcode = $_POST['contact'];
$phone_number = $_POST['PhoneNumber'];
$gender = $_POST['gender'];
$id = $_POST['num1'];
$id1 = $_POST['num2'];
$id2 = $_POST['num3'];

$sql = "INSERT INTO REGISTRATION VALUES('$firstname','$father_name','$email','$dob ','$country','$stdcode','$phone_number','$gender','$id','$id1','$id2')";
}
if(mysqli_query($conn, $sql)){
 echo'new record created';
  
} else{
  echo "ERROR: Hush! Sorry $sql. "
      . mysqli_error($conn);
}
mysqli_close($conn);
?>