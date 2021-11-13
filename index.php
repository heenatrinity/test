
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Document</title>
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<link rel="stylesheet" href="style.css">

</head>
<body>
<?php if (isset($errorMsg)) { echo "<p class='message'>" .$errorMsg. "</p>" ;} ?>

	<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>"
	 onsubmit ="return validate();" >
		<div class="container center_div">
			<div class="row">
				<div class="col-lg-8 col-md-8" >
					<div class="form-group">
						<label for="username">Username</label>
						<input type="text" class="form-control" name="username" id="username" aria-describedby="emailHelp" placeholder="Enter name" value="<?php if(isset($username)){echo $username;} ?>"
<?php if(isset($code) && $code == 1){echo "class=errorMsg" ;} ?> >
<span id= "firstname" class= "text-danger font-weight-bold"></span>
						<small id="emailHelp" class="form-text text-muted"></small>
					  </div>
					  
					  <div class="form-group">
						  <label for="exampleInputemail">Email</label>
						  <input type="email" class="form-control" name="email" id="email" placeholder="Email"value="<?php if(isset($email)){echo $email; }?>"
<?php if(isset($code) && $code == 2){echo "class=errorMsg" ;}?> >
<span id= "email1" class= "text-danger font-weight-bold"></span>
						</div>
			  
					  <div class="form-group">
						<label for="exampleInputPassword1">Password</label>
						<input type="password" class="form-control" name="password" id="password" placeholder="Password" value="<?php if(isset($password)){echo $password;} ?>"
<?php if(isset($code) && $code == 3){echo "class=errorMsg" ;} ?> >
<span id= "password1" class= "text-danger font-weight-bold"></span>
					  </div>
			  
					  <div class="form-group">
						  
						  <label for="country"> Country:</label>
			<select id="country" name="country">
				<option value=""></option>
				<option value="india">India</option>
				<option  value="USA" >USA</option>
				<option value="CHINA">China</option>
			</select>
			<span id= "country1" class= "text-danger font-weight-bold"></span>
						</div>
					  
						<label class="form-check-label" for="exampleCheck1">Hobbies:</label>
			  
			  
					  <div class="form-check">
						<input type="checkbox" class="form-check-input" name="hobbie[]" id="exampleCheck1" >
						<label class="form-check-label" for="exampleCheck1">Dancing</label>
					  </div>
			  
					  <div class="form-check">
						  <input type="checkbox" name="hobbie[]" class="form-check-input" id="exampleCheck1" >
						  <label class="form-check-label"  for="exampleCheck1">sports</label>
						</div>
			  
						<div class="form-check">
						  <input type="checkbox" class="form-check-input"  name="hobbie[]" id="exampleCheck1" > 
						  <label class="form-check-label" for="exampleCheck1">travelling</label>
						</div>
			  
						<label class="form-check-label" for="exampleCheck1">Gender</label>
			  
						<div class="form-check">
						  <input class="form-check-input position-static" type="radio" name="blankRadio" id="blankRadio1" value="option1" aria-label="..." > Male
						</div>
			  
						<div class="form-check">
						  <input class="form-check-input position-static" type="radio" name="blankRadio" id="blankRadio1" value="option1" aria-label="..." > Female
						</div>
			  
						<div class="form-check">
						  <input class="form-check-input position-static" type="radio" name="blankRadio" id="blankRadio1" value="option1" aria-label="..."> Other
						  <span id= "gender1" class= "text-danger font-weight-bold"></span>
						</div>
			  
					  <button type="submit" name= "Submit" value= "Submit" class="btn btn-primary">Register</button>
					  </div>
				</div>
			</div>
		
	  </form>
	  <script type="text/javascript">
		function validate() {
			var error = "";
			var name = document.getElementById("username");
			if (name.value == "") {
				
				document.getElementById("firstname").innerHTML = "**You Have To Write Your Name. ";
				return false;
			}

			var email = document.getElementById("email");
			if (email.value == "" || email.value.indexOf("@") == -1) {
				
				document.getElementById("emil1").innerHTML = "**You Have To Write Valid Email Address. ";
				return false;
			}

			var password = document.getElementById("password");
			if (password.value == "" || password.value >= 8) {
			
				document.getElementById("password1").innerHTML = " **Password Must Be More Than Or Equal To 8 Digits. ";
				return false;
			}
			var country = document.getElementById("country");
			if (country.value == "") {
			
				document.getElementById("country1").innerHTML = " **Please selct the country. ";
				return false;
			}
			var genderM=form.gender_male.value;
             var genderF=form.gender_female.value;

    if(genderM.checked==false && genderF.checked==false )
       {
		document.getElementById("gender1").innerHTML = " *You must select male or female";
            return false;
			}
			else {
				return true;
			}
		}

	</script>
</body>
</html>