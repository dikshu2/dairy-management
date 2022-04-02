<!-- <html>
 <head>
     <title>Login</title>
    <link rel="stylesheet" href="css/bootstrap.min.css"> 
    <link rel="stylesheet" href="login.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>         
 </head>
 <body>
     <div class="row">
	 <div class="wrapper">
      <div class="container">
          <div class="row justify-content-md-center">
              <div class="col-6">
                <div class="card">
                    <div class="card-body">
                     <form method="post" action="userdb.php">
                        
                          <!-- <div class="mb-3">
						  <i class="fas fa-user"></i>
                            <label class="form-label">Email Address</label>
                            <input type="email" name="email" class="form-control" placeholder="email@gmail.com">
                        </div> 
                          <div class="mb-3">
							  
                            <label class="form-label">Password</label>
                            <input type="password" name="pass1" class="form-control" placeholder="******">
                        </div> 
                          
                        <button type="submit" class="btn btn-success">Login</button> -->
						<!-- <div class="mb-3">
            <i class="fas fa-user"></i>
            <input type="text" name="email" name="email" class="form-control"  placeholder="Email" required>
          </div>
          <div class="mb-3">
            <i class="fas fa-lock"></i>
            <input type="password" name="pass1" class="form-control"  placeholder="Password" required>
          </div>
          <div class="pass"><a href="#">Forgot password?</a></div>
          <div class="row button">
            <input type="submit" value="Login">
          </div>
          <div class="signup-link">Not a member? <a href="registration.php">Signup now</a></div>
</div>

                     </form>

                     <?php

                        if(isset($_GET['errmsg'])){ ?>
                          <div class="alert alert-danger">
                              <?php echo $_GET['errmsg']; ?>
                          </div>
                      <?php  }
                     ?>
                     <?php

                        if(isset($_GET['msg'])){ ?>
                          <div class="alert alert-success">
                              <?php echo $_GET['msg']; ?>
                          </div>
                      <?php  }
                     ?>
                    </div>
                 </div>
              </div>
          </div>
      </div>
    </div>
 </body>
 <script src="js/bootstrap.min.js"></script>
</html> --> -->
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="style.css">
   </head>
<body>
  <div class="wrapper">
    <h2>Registration</h2>
    <form action="database.php" id="frm" method="post">
      <div class="input-box">
        <input type="text"name="username" placeholder="Enter your name" required>
        
      </div>
      <div class="input-box" >
        <input type="email" name="email" id="email" placeholder="Enter your email" required>
        
      </div>
	  <div class="error" id="emailMissing"></div>
    <div class="error" id="emailError"></div>
      <div class="input-box">
        <input type="text" name="address" placeholder="Enter your address" required>

      </div>
      <div class="input-box">
        <input type="number" name="phonenumber" id="phone" placeholder="Enter your phonenumber" required>
        <div class="error" id="phoneMissing"></div>
        <div class="error" id="phoneError"></div>
      </div>
      <div class="input-box">
        <input type="password" id="password" name="password" placeholder="Create password" required>
        
      </div>
      
      <div class="error" id="passwordMissing"></div>
        <div class="error" id="passwordError"></div>
      <div class="input-box">
        <input type="password" id="confirm" placeholder="Confirm password" required>
        
      </div>
      <div class="error" id="passwordConfirmMissing"></div>
        <div class="error" id="passwordConfirmError"></div>
      
      <div class="input-box button">
        <input type="Submit" id="submitButton"value="Register Now">
      </div>
      <div class="text">
        <h3>Already have an account? <a href="login.html">Login now</a></h3>
        
      </div>
    </form>
  </div>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js" ></script>
	  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.3/jquery.validate.min.js" ></script>
	  <script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  	<script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.17.0/dist/jquery.validate.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

	  <script src="script.js" ></script>
</body>
</html>

