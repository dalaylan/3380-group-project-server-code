<?php
	#POST
	#creatNote(String name, int userID, int apartmentID, String noteName, text note)
	#takes json in POST body with the above info, creates note in the notes table

//echo file_get_contents('php://input');

$body = file_get_contents('php://input');

$json = json_decode($body,true);

$name = $json['username'];
$userID =$json['userID'];
$aptID =  $json['apartmentID'];
$noteName = $json['noteName'];
$noteText = $json['data'];
$listType = $json['listType'];

$connection=mysqli_connect("127.0.0.1","root","33803380","3380"); //connect to the server
//TODO make this connection secure when we launch for real
if(mysqli_connect_errno()){
        die("Database connection failed: " . mysqli_connect_error() . "(" . mysqli_connect_errno() . ")" ); }
        //error code for if connection fails

//$sql = "INSERT INTO notes ('apartmentid','userid','noteName','data','listType','username') VALUES ('". $aptID ."','". $userID . "','". $noteName . "','". $noteText ."','". $listType ."','". $name ."')";
$sql = "INSERT INTO `notes` (`username`, `apartmentID`, `userID`, `noteName`, `data`, `listType`) VALUES ('".$name."','".$aptID."', '".$userID."', '".$noteName."', '".$noteText."', '".$listType."')";

if(mysqli_query($connection, $sql)){  //creates user, echo nothing if successful, echo error message and kills script if failed
        echo "";}
        else{
        echo "Failed to add note " . mysqli_error($connection); //will fail on user existing(expected error) or other(unexpected)
        die("");}


			#return ID of note created


$query = "SELECT * FROM notes where id=LAST_INSERT_ID()"; //store sql statement to pass in the msqi query function
$result = mysqli_query($connection,$query);     //store query so its easier to deal with

if(!$result){ die("Database query failed on ID return.");} //error code for failed query

$row = mysqli_fetch_assoc($result); //store row in an assoc array

echo $row['id'];


mysqli_close($connection);
?>
