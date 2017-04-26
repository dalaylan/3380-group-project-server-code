<?php
#POST
#deleteApartment(apartmentID)
#deletesApartment and removes it from all users associated with it

$body = file_get_contents('php://input'); //gets POST body
$json = json_decode($body,true); //converts to json (format we are using)

$aptID=$json['apartmentID'];   

$connection=mysqli_connect("127.0.0.1","root","33803380","3380"); //connect to the server
//TODO make this connection secure when we launch for real
if(mysqli_connect_errno()){
        die("Database connection failed: " . mysqli_connect_error() . "(" . mysqli_connect_errno() . ")" ); }
        //error code for if connection fails

$sql = "DELETE FROM `Apartment` WHERE `id` = ".$aptID ; 
//store sql statement to pass in the msqi quessy function
//$result = mysqli_query($connection,$query);     //store query so its easier to deal with

if(mysqli_query($connection, $sql)){  //creates user, echo nothing if successful, echo error message and kills script if failed
	echo "Deleted Apartment Successfully ";}
	else{
	echo "Failed to remove user " . mysqli_error($connection); //will fail on user existing(expected error) or other(unexpected)
	die("");}

			#remove from all users
$query = "SELECT * FROM user WHERE ApartmentID LIKE ". $aptID; //store sql statement to$
$result = mysqli_query($connection,$query);     //store query so its easie$

if(!$result){ die("Database query failed on removal of apartment users.");} //error code for failed query

while($row = mysqli_fetch_assoc($result)){ //store row in an array
$userID = $row['UserID'];
$sql = "UPDATE `user` SET `ApartmentID` = NULL WHERE UserID=".$userID; //remove link to apartment from user
}

mysqli_close($connection);
?>
