<?php
$servername = "127.0.0.1";
$dbusername = "root";
$password = "";
$database = "reg_form";
// Create connection
$conn = new mysqli($servername, $dbusername, $password, $database );

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

//Creating Local Variables
$username=$_POST["username"];
$email=$_POST["email"];
$password=$_POST["password"];
$country=$_POST["country"];
$gender=$_POST["gender"];
$hobbie1=$_POST["hobbie"];
$hbk="";  
 foreach($hobbie1 as $hbk1)  
   {  
      $hbk .= $hbk1.", ";  
   }


//inserting the data to database 
$sql = "INSERT INTO login_form (username, email, password, country, gender,hobbie)
VALUES ('$username','$email','$password','$country','$gender', '$hbk')";

//checking if data is entered or not
if ($conn->query($sql) === TRUE) {
//   echo "New record created successfully";

} else {
  echo "Error: " . $sql . "<br>" . $conn->error;

}
?>