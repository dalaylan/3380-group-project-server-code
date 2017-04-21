<?php
#POST
#createPersonalMessage(senderID,apartmentID,MSGText)
#creates event with data sent in post

$body = file_get_contents('php://input');

$json = json_decode($body,true);

$senderID =   $json['userID'];
$apartmentID = $json['apartmentID'];
$MSGText =  $json['MSGText'];

$connection=mysqli_connect("127.0.0.1","root","33803380","3380"); //connect to the server
//TODO make this connection secure when we launch for real
if(mysqli_connect_errno()){
        die("Database connection failed: " . mysqli_connect_error() . "(" . mysqli_connect_errno() . ")" ); }
        //error code for if connection fails

$sql = "INSERT INTO `messages` (`text`, `apartment id`, `senderID`) VALUES ('".$MSGText."', '".$apartmentID."', '".$senderID."')";
if(mysqli_query($connection, $sql)){  //creates user, echo nothing if successful, echo error message and kills script if failed
        echo "Successfully added to table ";}
        else{
        echo "Failed to add note " . mysqli_error($connection);
        die("");}
?>
