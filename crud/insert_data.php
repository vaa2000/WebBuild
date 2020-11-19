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

$sql="INSERT INTO `donors` (`id`, `name`, `email`, `password`, `Phone_no`, `img`, `Address`) VALUES (NULL, 'Meera Kumari', 'mk@gmail.com', 'abcd@123', '9217452713', 'img/mk.jpg', 'A4,Suresh CHSG')";
$result=mysqli_query($conn,$sql);

if($result){
	echo "The record has been inserted successfully !<br>";
}else{
	echo "The record has not been inserted successfully error -->".mysqli_error($conn);
}


?>