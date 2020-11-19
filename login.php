<!DOCTYPE html>
<html>
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Login</title>
<head>
<body>
   <?php
       if($_SERVER["REQUEST_METHOD"]=='POST'){

          $yourid=$_POST["id1"];
		  $userpasswd=$_POST["pwd1"];

	   
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
}

$sql="SELECT * FROM `donors`";
$result=mysqli_query($conn,$sql);

//find no of records
$num=mysqli_num_rows($result);
echo $num;
echo "<br>";   
  while($num>0)
  {
	  $row=mysqli_fetch_assoc($result);
	  if($yourid==$row['id'])
	  {
		  ?>
		    <h4>Hi <?php echo $row["name"]; ?> !</h4>
			<!--<h4>Amount that you donated till now</h4>-->
			
		  <?php
	  }
	  //$num=$num-1;
  }	  
   
	   }
   
?>



   <form action="login.php" method="POST">
      <label for="id1">Enter you ID</label><br>
      <input type="text" id="id1" name="id1"><br>
      <label for="pwd1">Password:</label><br>
      <input type="password" id="pwd1" name="pwd1">
	  
	  
	  <button class="btn">submit</button>
    </form>
   
   
   
   



</body>
</html>

