<?php
	#POST
	#requestToJoinApartment(userId,ApartmentID)
	#just autojoins to apartment for now

//read POST info and convert to json
$body = file_get_contents('php://input');
$json = json_decode($body,true);

//reads params from json convert of body
$userID =   $json['userID'];
$aptID =  $json['ApartmentID'];

$connection=mysqli_connect("127.0.0.1","root","33803380","3380"); //connect to the server

if(mysqli_connect_errno()){ //check if connection worked
        die("Database connection failed: " . mysqli_connect_error() . "(" . mysqli_connect_errno() . ")" ); }
        //error code for if connection fails

	//SQL statement
  $sql = "UPDATE `user` SET `ApartmentID` = ".$aptID." WHERE UserID=".$userID;

if(mysqli_query($connection, $sql)){  //creates user, echo nothing if successful, echo error message and kills script if failed
        echo "Successfully added to table ";}
        else{
        echo "Failed to add note " . mysqli_error($connection); //will fail on user existing(expected error) or other(unexpected)
        die("");}

mysqli_close($connection);
//disconnect
?>
