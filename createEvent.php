<?php
#POST
#createEvent(String date, String name, int userID,int apartmentID)
#creates event with data sent in post

$body = file_get_contents('php://input');

$json = json_decode($body,true);

$username =   $json['username'];
$userID = $json['userID'];
$aptID =  $json['apartmentID'];
$EventName = $json['eventName'];
$startDate = $json['startDate'];
$endDate = $json['endDate'];

$connection=mysqli_connect("127.0.0.1","root","33803380","3380"); //connect to the server
//TODO make this connection secure when we launch for real
if(mysqli_connect_errno()){
        die("Database connection failed: " . mysqli_connect_error() . "(" . mysqli_connect_errno() . ")" ); }
        //error code for if connection fails

//$sql = "INSERT INTO 'events' ('apartmentid','userid','startDate','name','creator','endDate') VALUES ('".$aptID."','".$userID."','".$startDate."','".$EventName."','".$username."','".$endDate."')";
  $sql = "INSERT INTO `events` (`apartmentid`, `userid`, `startDate`, `endDate`, `name`, `creator`) VALUES ('".$aptID."', '".$userID."', '".$startDate."', '".$endDate."', '".$EventName."', '".$username."')";

if(mysqli_query($connection, $sql)){  //creates user, echo nothing if successful, echo error message and kills script if failed
        echo "Successfully added to table ";}
        else{
        echo "Failed to add note " . mysqli_error($connection); //will fail on user existing(expected error) or other(unexpected)
        die("");}

?>