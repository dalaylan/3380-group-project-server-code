<?php
#POST
#deleteEvent(id)
#deletesEvent

$body = file_get_contents('php://input'); //gets POST body
$json = json_decode($body,true); //converts to json (format we are using)

$ID=$json['id'];   

$connection=mysqli_connect("127.0.0.1","root","33803380","3380"); //connect to the server
//TODO make this connection secure when we launch for real
if(mysqli_connect_errno()){
        die("Database connection failed: " . mysqli_connect_error() . "(" . mysqli_connect_errno() . ")" ); }
        //error code for if connection fails

$sql = "DELETE FROM `events` WHERE `id` = ".$ID; 
//store sql statement to pass in the msqi quessy function
//$result = mysqli_query($connection,$query);     //store query so its easier to deal with

if(mysqli_query($connection, $sql)){  //creates user, echo nothing if successful, echo error message and kills script if failed
	echo "Successfully deleted Event";}
	else{
	echo "Failed to remove user " . mysqli_error($connection); //will fail on user existing(expected error) or other(unexpected)
	die("");}

mysqli_close($connection);
?>
