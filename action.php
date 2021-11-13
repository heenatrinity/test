
<?php
 include 'config.php'; 

if(isset($_POST['Submit'])){
  $username=trim($_POST["username"]);
  $email=trim($_POST["email"]);
  $password=trim($_POST["password"]);
 
  // $country=trim($_POST["country"]);
  // $gender=trim($_POST["gender"]);
  // $hobbie=trim($_POST["hobbie"]);
  
  if($username =="") {
    $errorMsg=  "error : You did not enter a name.";
    $code= "1" ;
  }
   //check if email field is empty
   elseif($email == ""){
    $errorMsg=  "error : You did not enter a email.";
    $code= "2";
} //check for valid email 
elseif(!preg_match("/^[_\.0-9a-zA-Z-]+@([0-9a-zA-Z][0-9a-zA-Z-]+\.)+[a-zA-Z]{2,6}$/i", $email)){
  $errorMsg= 'error : You did not enter a valid email.';
  $code= "2";
}
  elseif($password == ""){
    $errorMsg=  "error : Please enter password.";
    $code= "3";
  }
  // if($gender =="") {
  //   $errorMsg=  "error : You did not enter the gender.";
  //   $code= "4" ;
  // }
else{
  echo "Successfully welcome to action page";
  //final code will execute here.
}
}
?>