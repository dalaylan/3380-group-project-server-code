<?php
#getUserMessages(int apartmentID)
#will display all messages in json rows 

$aptID=$_GET['apartmentID']; //store ID
$connection=mysqli_connect("127.0.0.1","root","33803380","3380"); //connec$

if(mysqli_connect_errno()){
        die("Database connection failed: " . mysqli_connect_error() . "(". mysqli_connect_errno() . ")" ); }
        //error code for if connection fails


$query = "SELECT * FROM messages WHERE `apartmentID` LIKE ".$aptID; //store sql statement
$result = mysqli_query($connection,$query);     //store query so its easie$

if(!$result){ die("Database query failed.");} //error code for failed query

while($row = mysqli_fetch_assoc($result)){ //store row in an array
print json_encode($row); //print rows
echo "\n";
}

mysqli_close($connection);


?>
