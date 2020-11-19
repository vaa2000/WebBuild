<?php

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
}

$sql="SELECT * FROM `donors`";
$result=mysqli_query($conn,$sql);

//find no of records
$num=mysqli_num_rows($result);
echo $num;
echo "<br>";
?>
<table border="1">
  <tr>
    <th>ID</th>
    <th>Name</th>
    <th>Email</th>
    <th>Phone Number</th>
    
<?php


//display rows returned by sql query
if($num>0){
	//$row=mysqli_fetch_assoc($result);
	//echo var_dump($row);
	//echo "<br>";	
   
    /*while($row=mysqli_fetch_assoc($result)){
		echo var_dump($row);
	    echo "<br>";
	}
	
	*/
    while($row=mysqli_fetch_assoc($result)){ ?>
	<tr>
        <td><?php echo $row["id"]; ?></td>
        <td><?php echo $row["name"]; ?></td>
        <td><?php echo $row["email"]; ?></td>
        <td><?php echo $row["Phone_no"]; ?></td>        
    </tr>
	<br>

<?php } ?>
</table>  
	
<?php	 
	
} ?>