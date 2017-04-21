<?php
#POST
#createApartment(userID,aptName,location)
#creates a new apartment, adds the user to the apt, and returns the apt id

$body = file_get_contents('php://input');

$json = json_decode($body,true);

$userID =   $json['userID'];
$aptName = $json['aptName'];
$location =  $json['location'];

$connection=mysqli_connect("127.0.0.1","root","33803380","3380"); //connect to the server
//TODO make this connection secure when we launch for real

if(mysqli_connect_errno()){
        die("Database connection failed: " . mysqli_connect_error() . "(" . mysqli_connect_errno() . ")" ); }
        //error code for if connection fails

$sql = "INSERT INTO `Apartment` (`AptName`, `address`, `owner`) VALUES ('".$aptName."', '".$location."', '".$userID."')";
if(mysqli_query($connection, $sql)){  //creates user, echo nothing if successful, echo error message and kills script if failed
        echo "Successfully added to table ";}
        else{
        echo "Failed to add note " . mysqli_error($connection);
        die("");}

						#update user id
//fetch the apt id just created
$query = "SELECT * FROM user WHERE email='". $email ."'"; //store sql statement to pass in the msqi query function
$result = mysqli_query($connection,$query);     //store query so its easier to deal with

if(!$result){ die("Database query failed.");} //error code for failed query

$row = mysqli_fetch_assoc($result); //store row in an assoc array
$aptID = $result["Apartment"];


//use it to update the user apt id field
$sql = "UPDATE `user` SET `Apartment` = ".$aptID." WHERE id=".$userID;

if(mysqli_query($connection, $sql)){  //creates user, echo nothing if successful, echo error message and kills script if failed
        echo "Successfully added to table ";}
        else{
        echo "Failed to add note " . mysqli_error($connection); //will fail on user existing(expected error) or other(unexpected)
        die("");}


#return the apt ID in json format
print json_encode($aptID);        //print out in json format to match project abi


mysqli_close($connection);
//disconnect


?>
