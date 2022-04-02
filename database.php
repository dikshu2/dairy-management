
<?php 
	$db = mysqli_connect('localhost', 'root', '', 'miniproject');

	$username = "";
    $email = "";
    $address="";
    $phonenumber = "";
    $password = "";
    
    
	if (isset($_POST['submit'])) {
		$username = $_POST['uname'];
        $email = $_POST['email'];
        $address= $_POST['address'];
        $phonenumber = $_POST['phonenumber'];
		$password = $_POST['password'];
		

	mysqli_query($db, "INSERT INTO student (name, email, address, phonenumber, password) VALUES 
		('$username', '$email','$address','$phonenumber','$password')"); 
		
		echo " Data inserted successfully.";	
        header('location:navbar.php');
	}
 ?>