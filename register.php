
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>
<body>
   <?php
     // define variables to empty values  
     $nameErr = $emailErr = $mobilenoErr = $genderErr = $websiteErr = $agreeErr = "";  
     $name = $email = $mobileno = $gender = $website = $agree = ""; 
    
	 if($_SERVER["REQUEST_METHOD"]=='POST'){
	  /*
	    //Name Validation
		if(isset($_POST["name"])){
		   //$name=test_input($_POST["name"]);
           $name1=$_POST["name"];		    
			if(!preg_match("/^[a-zA-Z ]*$/",$name1){
			     $nameErr = "Only alphabets and white space are allowed"; 
			 
			 }
		}else{
		   $nameErr="Name is required";
		}
		
		//Email Validation
		if(isset($_POST["email"]){
		   //$email=test_input($_POST["email"]);
           $email1=$_POST["email"];	   
		   if(!filter_var($email1, FILTER_VALIDATE_EMAIL)){
			     $emailErr = "Invalid email format";  
			 }
		}else{
		   $emailErr = "Email is required";  
		}
	 
	   //Phone Number Validation
        if(isset($_POST["phone"])){
		   //$mobileno=test_input($_POST["phone"]);
		   $mobileno1= $_POST["phone"];
			 if(!preg_match ("/^[0-9]*$/", $mobileno1)){
			     $mobilenoErr = "Only numeric value is allowed.";  
			 }
			 //check mobile no length should not be less and greater than 10  
             if (strlen ($mobileno1) != 10) {  
                $mobilenoErr = "Mobile no must contain 10 digits.";  
             }  
		}else{
		   $mobilenoErr = "Mobile no is required";  
		}	   
	 
	 }*/
	 $name1=$_POST["name"];		
	 $email1=$_POST["email"];
	 $mobileno1= $_POST["phone"];
	 $passwd=$_POST["password"];
	 $image1=$_POST["files"];
	 $addr1=$_POST["address"];
	 
	}
	 
	 
	/*function test_input($data) {
       $data = trim($data);
       $data = stripslashes($data);
       $data = htmlspecialchars($data);
       return $data;
     }
   */
    // Connecting to the Database
$servername = "localhost";
$username = "root";
$password = "";
$database="HumanTeam";


// Create a connection
$conn = mysqli_connect($servername, $username, $password,$database);

// Die if connection was not successful
if (!$conn){
    die("Sorry we failed to connect: ". mysqli_connect_error());
}
else{
    echo "Connection was successful<br>";
	//submit data to database
	
	$sql="INSERT INTO `donors` (`id`, `name`, `email`, `password`, `Phone_no`, `img`, `Address`) VALUES (NULL, '$name1', '$email1', '$passwd', '$mobileno1', '$image1', '$addr1')";
    $result=mysqli_query($conn,$sql);

    if($result){
	     echo "Your entry has been submitted successfully";
    }else{
	    echo "The record has not been inserted successfully error -->".mysqli_error($conn);
		//echo "Website cannot load due to technical issues!";
    }

	
	
}
   
   
   
?>





    <h1>register as user</h1>
    <form action="register.php"   method="post">
        <p>
            <label for="name">Name</label>
            <input type="text" name="name" id="name" placeholder="enter your name" required>
        </p>
        <p>
            <label for="email">Email</label>
            <input type="email" id="email" name="email" placeholder="enter your email" required>
        </p>
        <p>
            <label for="password">Password</label>
            <input type="password" id="password" name="password" placeholder="enter the password" required>
        </p>
		<p>
            <label for="phone">Phone number</label>
            <input type="number" id="phone" name="phone" placeholder="enter your phone number" required>
        </p>
		<p>
            <label for="files">Upload you photo:</label>
            <input type="file" id="files" name="files" required>
        </p>
        <p>
            <label for="address">Address</label>
            <input type="text" id="address" name="address" placeholder="enter valid address" required>
        </p>
        <button class="btn">submit</button>
    </form>
    
 </body>



</html>
