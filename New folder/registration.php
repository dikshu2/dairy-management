<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    
   </head>
<body>
  <div class="wrapper">
    <h2>Registration</h2>
    <form action="database.php" id="form" method="post">
      <div class="input-box">
      
        <input type="text" id="name" name="username" placeholder="Enter your name" >
       
      </div>
      <div class="input-box" >
      
        <input type="email" name="email" id="email" placeholder="Enter your email" >
        
      </div>
	  
      <div class="input-box">
      
        <input type="text" name="address" id="address" placeholder="Enter your address" >
         
        
      </div>
      <div class="input-box">
      <input type="number" name="phonenumber" id="number"  placeholder="Enter your phonenumber" >
        
        
      </div>
      <div class="input-box">
      
        <input type="password" id="password" name="password" placeholder="Create password"  pattern="(?=.*\)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>
        
        

      </div>
      
      
      <div class="input-box">
     
        <input type="password" id="password2" placeholder="Confirm password" >
        
       
      </div>
      
      
      <div class="input-box button">
        <input type="submit"  value="Register now">
      </div>
      <div class="text">
        <h3>Already have an account? <a href="login.php">Login now</a></h3>
        
      </div>
    </form>
  </div>
  

  <script src="jsvalidation.js"></script>
</body>
</html>