<!DOCTYPE html>
<html>
<body>
<?php
     // define variables to empty values  
     $nameErr = $emailErr = $mobilenoErr = $genderErr = $websiteErr = $agreeErr = "";  
     $name = $email = $mobileno = $gender = $website = $agree = ""; 
    
	 if($_SERVER["REQUEST_METHOD"]=='POST'){
		 $userid=$_POST["newid"];
		 $val=$_POST["dona"];
		 $amount=$_POST["amt"];
		 
		 
	 }
	 
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
	
	if($val=='Amount'){
	$sql1="INSERT INTO `donations`(`Amount`, `id`, `amount_id`) VALUES ('$amount', '$userid', NULL)";
    $result=mysqli_query($conn,$sql1);

    if($result){
	     echo "Your entry has been submitted successfully";
    }else{
	    echo "The record has not been inserted successfully error -->".mysqli_error($conn);
		//echo "Website cannot load due to technical issues!";
    }
	}else{
		echo "Thank you .Please contact Phone no:9837534545 for further details`";
	}

	
	
}
   
?>
<form action="donate.php" method="POST" >
  <h4>Donate according to your will,any form of donations for essential goods or funds will be accepted"</h4>
  <label for="newid">User ID</label><br>
  <input type="text" id="newid" name="newid"><br><br>
   
    <br>
  
  <h3>Form of Donation</h3>
  <select id="dona" name="dona">
     <option value="Amount">Amount</option>
     <option value="Clothes">Clothes</option>
     <option value="Books">Books</option>
     <option value="Toys">Toys</option>
  </select>
  <br>
  <label for="amt">If you are donating amount kindly enter amount that you are goin to donate</label>
  <input type="text" id="amt" name="amt"><br><br>
  
  <input type="submit" value="Submit">
  
  
</form>

</body>
</html>