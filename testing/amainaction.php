
<?php
 include 'config.php'; 
/*
if(isset($_POST['Submit'])){
  $username=trim($_POST["username"]);
  $lastName=trim($_POST["lastName"]);
  $email=trim($_POST["email"]);
  $rdb=trim($_POST["rdb"]);
  $password=trim($_POST["password"]);
  $phone=trim($_POST["phone"]);
  $country=trim($_POST["country"]);
  
  if($username =="") {
    $errorMsg=  "error : You did not enter a name.";
    $code= "1" ;
  }
  elseif($lastName =="") {
    $errorMsg=  "error : You did not enter a name.";
    $code= "2" ;
  }
   //check if email field is empty
   elseif($email == ""){
    $errorMsg=  "error : You did not enter a email.";
    $code= "3";
} //check for valid email 
elseif(!preg_match("/^[_\.0-9a-zA-Z-]+@([0-9a-zA-Z][0-9a-zA-Z-]+\.)+[a-zA-Z]{2,6}$/i", $email)){
  $errorMsg= 'error : You did not enter a valid email.';
  $code= "3";
}
elseif(!isset($_POST["rdb"])) {
    $errorMsg=  "error :You must select male or female.";

    }
  elseif($password == ""){
    $errorMsg=  "error : Please enter password.";
    $code= "4";
  }
  elseif($phone == "") {
    $errorMsg=  "error : Please enter number.";
    $code= "5";
  }
  //check if the number field is numeric
  elseif(is_numeric(trim($phone)) == false){
    $errorMsg=  "error : Please enter numeric value.";
    $code= "5";
  }
  elseif(strlen($phone)<10){
    $errorMsg=  "error : Number should be ten digits.";
    $code= "5";
  }
  elseif($country =="") {
    $errorMsg=  "error : plese select the country.";
    
  }
else{
  echo "Successfully welcome to action page";
  //final code will execute here.
}
}
*/
//Creating Local Variables
$username=($_POST["username"]);
  $lastName=($_POST["lastName"]);
  $email=($_POST["email"]);
  $rdb=($_POST["rdb"]);
  $password=($_POST["password"]);
  $phone=($_POST["phone"]);
  $country=($_POST["country"]);
  


//inserting the data to database 
$sql = "INSERT INTO registration(username, lastName, email, gender, password, phone, country)
VALUES ('$username','$lastName','$email','$rdb','$password','$phone','$country')";

//checking if data is entered or not
if ($conn->query($sql) === TRUE) {
//   echo "New record created successfully";

header("Location: mainindex.php"); 
exit();

} else {
  echo "Error: " . $sql . "<br>" . $conn->error;

}

?>