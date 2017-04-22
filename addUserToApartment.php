<?php
	#get
	#addUserToApartment(userId,apartmentID)
	#join apartment

$userID =   $_GET['userID'];
//$userID = $json['userID'];
$aptID =  $_GET['apartmentID'];

$connection=mysqli_connect("127.0.0.1","root","33803380","3380"); //connect to the server
//TODO make this connection secure when we launch for real
if(mysqli_connect_errno()){
        die("Database connection failed: " . mysqli_connect_error() . "(" . mysqli_connect_errno() . ")" ); }
        //error code for if connection fails
  $sql = "UPDATE `user` SET `ApartmentID` = ".$aptID." WHERE UserID=".$userID;

if(mysqli_query($connection, $sql)){  //creates user, echo nothing if successful, echo error message and kills script if failed
        echo "Successfully added to table ";}
        else{
        echo "Failed to add note " . mysqli_error($connection); //will fail on user existing(expected error) or other(unexpected)
        die("");}


?>
