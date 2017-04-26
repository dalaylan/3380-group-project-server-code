<?php
#POST
#createPersonalMessage(int senderID,int apartmentID,String MSGText)
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

$sql = "INSERT INTO `messages` (`MSGText`, `apartmentID`, `senderID`) VALUES ('".$MSGText."', '".$apartmentID."', '".$senderID."')";
if(mysqli_query($connection, $sql)){  //creates user, echo nothing if successful, echo error message and kills script if failed
        echo "";}
        else{
        echo "Failed to add note " . mysqli_error($connection);
        die("");}

			#return ID of message created


$query = "SELECT * FROM messages where id=LAST_INSERT_ID()"; //store sql statement to pass in the msqi query function
$result = mysqli_query($connection,$query);     //store query so its easier to deal with

if(!$result){ die("Database query failed on ID return.");} //error code for failed query

$row = mysqli_fetch_assoc($result); //store row in an assoc array

echo $row['id']; //print out the id of the row created last so it can be stored locally


mysqli_close($connection);
?>
