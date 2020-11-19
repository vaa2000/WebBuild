<?php

// Connecting to the Database
$servername = "localhost";
$username = "root";
$password = "";


// Create a connection
$conn = mysqli_connect($servername, $username, $password);

// Die if connection was not successful
if (!$conn){
    die("Sorry we failed to connect: ". mysqli_connect_error());
}
else{
    echo "Connection was successful<br>";
}


$sql="CREATE DATABASE HumanTeam";
$result=mysqli_query($conn,$sql);

if($result){
 echo "this db was created successfully";
}else{
  echo "this db was not created successfully error--->".mysqli_error($conn);
}
echo "The result is";
echo var_dump($result);
echo "<br>";





  

?>