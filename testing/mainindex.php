<?php $res['country'] = "";?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="mystyle.css">
<title>Registration</title>

</head>
<body>
<?php if (isset($errorMsg)) { echo "<p class='message'>" .$errorMsg. "</p>" ;} ?>
<section class="vh-100 gradient-custom">
  <div class="container py-5 h-100">
    <div class="row justify-content-center align-items-center h-100">
      <div class="col-12 col-lg-9 col-xl-7">
        <div class="card shadow-2-strong card-registration" style="border-radius: 15px;">
          <div class="card-body p-4 p-md-5">
            <h3 class="mb-4 pb-2 pb-md-0 mb-md-5">Registration Form</h3>
            
	<form method="post" action="amainaction.php" 	 onsubmit ="return validate();" >

              <div class="row">
                <div class="col-md-6 mb-4">

                  <div class="form-outline">
                    <input type="text" name="username" id="username"  class="form-control form-control-lg" value="<?php if(isset($username)){echo $username;} ?>"
<?php if(isset($code) && $code == 1){echo "class=errorMsg" ;} ?> />
<span id= "firstname" class= "text-danger"></span>
                    <label class="form-label" for="firstName">First Name</label>
                  </div>

                </div>
                <div class="col-md-6 mb-4">

                  <div class="form-outline">
                  <div class="form-outline">
                    <input type="text" id="lastName" name= "lastName" class="form-control form-control-lg" value="<?php if(isset($lastName)){echo $lastName;} ?>"
<?php if(isset($code) && $code == 2){echo "class=errorMsg" ;} ?>/>
                    <span id= "lastname1" class= "text-danger"></span>
                    <label class="form-label" for="lastName">Last Name</label>
                  </div>
    
                </div>
              </div>

              <div class="row">
                <div class="col-md-6 mb-4 ">
                <div class="form-outline">
                    <input type="email" name="email" id="email" class="form-control form-control-lg" value="<?php if(isset($email)){echo $email; }?>"
<?php if(isset($code) && $code == 3){echo "class=errorMsg" ;}?> />
<span id= "email1" class= "text-danger"></span>
                    <label class="form-label" for="emailAddress">Email</label>
                  </div>
                  
                   </div>
                
                <div class="col-md-6 mb-4">

                  <h6 class="mb-2 pb-1">Gender: </h6>
                  <span id= "gender1" class= "text-danger"></span>
                  <div class="form-check form-check-inline">
                    <input
                      class="form-check-input"
                      type="radio"
                      name="rdb"
                      id="femaleGender" <?php if (isset($gender) && $gender=="female") echo "checked";?>
                      value="female"
                      
                    />
                    <label class="form-check-label" for="femaleGender">Female</label>
                   
                  </div>

                  <div class="form-check form-check-inline">
                    <input
                      class="form-check-input"
                      type="radio"
                      name="rdb"
                      id="maleGender" <?php if (isset($gender) && $gender=="male") echo "checked";?>
                      value="male"
                    />
                    <label class="form-check-label" for="maleGender">Male</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input
                      class="form-check-input"
                      type="radio"
                      name="rdb"
                      id="otherGender"
                      <?php if (isset($gender) && $gender=="other") echo "checked";?>
                      value="other"
                    />
                    <label class="form-check-label" for="otherGender">Other</label>
                  </div>

                </div>
              </div>

              <div class="row">
                <div class="col-md-6 mb-4 pb-2">

                  <div class="form-outline">
                  <input type="password" class="form-control" name="password" id="password" placeholder="Password" value="<?php if(isset($password)){echo $password;} ?>"
<?php if(isset($code) && $code == 5){echo "class=errorMsg" ;} ?> >
<span id="password1" class= "text-danger"></span>
                    <label class="form-label" for="password">Password</label>
                  </div>

                </div>
                <div class="col-md-6 mb-4 pb-2">

                  <div class="form-outline">
                    <input type="tel" id= "phone" name ="phone" class="form-control form-control-lg" value="<?php if(isset($phone)){echo $phone;} ?>"
<?php if(isset($code) && $code == 5){echo "class=errorMsg" ;}?>/>
<span id= "phone1" class= "text-danger"></span>
                    <label class="form-label" for="phoneNumber">Phone Number</label>
                  </div>

                </div>
              </div>

              <div class="row">
                <div class="col-12">

                <label class="form-label select-label">Choose option</label>
                  <select class="select form-control-lg" id="country" name="country">
                    <option value="1" disabled>Choose country</option>
                    <option value=""></option>
                    <option value="India">India</option>
                    <option value="USA">USA</option>
                    <option value="China" >China</option>
                    <option value="japan">Japan</option>
                  </select>
                  
<span id= "country1" class= "text-danger"></span>
                </div>
              </div>

              <div class="mt-4 pt-2">
                <input class="btn btn-primary btn-lg" type="submit" name= "Submit" value= "Submit" />
              </div>

            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script><script type="text/javascript" src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<script type="text/javascript">
		function validate() {
			var error = "";
			var name = document.getElementById("username");
			if (name.value == "") {
				
				document.getElementById("firstname").innerHTML = "**You Have To Write Your Name. ";
				return false;
			}
      var lastName = document.getElementById("lastName");
			if (lastName.value == "") {
				
				document.getElementById("lastname1").innerHTML = "**You Have To Write Your Last Name. ";
				return false;
			}

			var email = document.getElementById("email");
			if (email.value == "" || email.value.indexOf("@") == -1) {
				
				document.getElementById("email1").innerHTML = "**You Have To Write Valid Email Address. ";
				return false;
			}
      var genderM=document.getElementById("maleGender");
      var genderF=document.getElementById("femaleGender");
 if(genderM.checked==false && genderF.checked==false )
       {
		document.getElementById("gender1").innerHTML = " *You must select male or female";
            return false;
			}

			var password2 = document.getElementById("password");
			if (password2.value == "" || password2.value >= 8) {
			
				document.getElementById("password1").innerHTML = " **Password Must Be More Than Or Equal To 8 Digits. ";
				return false;
			}
      var phone = document.getElementById('phone').value;
  if(phone.length == 0) {
    document.getElementById("phone1").innerHTML = " *enter the correct number";
            return false;
  }

  if(phone.length != 10) {
    document.getElementById("phone1").innerHTML = " *You must have 10 digit";
            return false;
  }
  if(!phone.match(/^[0-9]{10}$/)) {
    document.getElementById("phone1").innerHTML = " *You must have 0 to 9";
            return false;
  }
			//var country = document.getElementById("country");
			var e = document.getElementById("country");
                var strUser = e.options[e.selectedIndex].value;

                var strUser1 = e.options[e.selectedIndex].text;
                if(strUser==0)
                {
                    //alert("Please select a user");
                    document.getElementById("country1").innerHTML = " *You must selecta country";
            return false;
                }
		}
	</script>

</body>
</html>