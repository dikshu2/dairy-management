<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <script src="jsvalidation.js"></script>
    <!-- pattern="(?=.*\)(?=.*[a-z])(?=.*[A-Z]).{8,}" -->
   </head>
<body>
  <div class="wrapper">
    <h2>Registration</h2>
    <form action="database.php" id="form" method="post" onsubmit="return submitForm()">
      <div class="input-box">
      <div class="input-control">
        <input type="text" id="username" name="uname" placeholder="Enter your name" >
        <div class="error"></div>
      </div>
      </div>
      <div class="input-box" >
      <div class="input-control">
        <input type="email" name="email" id="uemail" placeholder="Enter your email" >
        <div class="error"></div>
</div>
      </div>	  
      <div class="input-box">
      <div class="input-control">
        <input type="text" name="address" id="uaddress" placeholder="Enter your address" >         
        <div class="error"></div>
</div>
      </div>
      <div class="input-box">
        <div class="input-control">
        <input type="text" name="phonenumber" id="unumber"  placeholder="Enter your phonenumber" >
        
        <div class="error"></div>
</div>
      </div>
      <div class="input-box">
      <div class="input-control">
        <input type="password" id="upassword" name="password" placeholder="Create password"   title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>
        
        <div class="error"></div>
</div>
      </div>
      
      
      <div class="input-box">
      <div class="input-control">
        <input type="password" id="upassword2" name="password2" placeholder="Confirm password" >
        
        <div class="error"></div>
</div>
      </div>
      
      
      <div class="input-box button">
        <input type="submit" value="Register now" name="submit">
      </div>
      <div class="text">
        <h3>Already have an account? <a href="login.php">Login now</a></h3>
        
      </div>
    </form>
  </div>
  

  
</body>
</html>