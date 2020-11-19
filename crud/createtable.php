
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

//create table in db
/*$sql=CREATE TABLE `donors` ( `id` INT NOT NULL AUTO_INCREMENT ,  `name` VARCHAR(20) NOT NULL ,  `email` VARCHAR(10) NOT NULL , 
 `password` VARCHAR(15) NOT NULL ,  `Phone_no` VARCHAR(10) NOT NULL ,  `img` VARCHAR(50) NOT NULL ,  `Address` VARCHAR(30) NOT NULL ,   
 PRIMARY KEY  (`id`));
 
 $result=mysqli_query($conn,$sql);

//check for table creation
if($result){
 echo "this table was created successfully";
}else{
  echo "this table was not created successfully error--->".mysqli_error($conn);
}
​



*/

  

?>