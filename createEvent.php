<?php
#POST
#createEvent(String date, String name, int userID,int apartmentID)
#creates event with data sent in post

$body = file_get_contents('php://input');

$json = json_decode($body,true);

//$username =   $json['username'];
$userID = $json['userID'];
$aptID =  $json['apartmentID'];
$EventName = $json['name'];
$startDate = $json['startDate'];
$endDate = $json['endDate'];

$connection=mysqli_connect("127.0.0.1","root","33803380","3380"); //connect to the server
//TODO make this connection secure when we launch for real
if(mysqli_connect_errno()){
        die("Database connection failed: " . mysqli_connect_error() . "(" . mysqli_connect_errno() . ")" ); }
        //error code for if connection fails

//$sql = "INSERT INTO 'events' ('apartmentid','userid','startDate','name','creator','endDate') VALUES ('".$aptID."','".$userID."','".$startDate."','".$EventName."','".$username."','".$endDate."')";
  $sql = "INSERT INTO `events` (`apartmentID`, `userID`, `startDate`, `endDate`, `name`) VALUES ('".$aptID."', '".$userID."', '".$startDate."', '".$endDate."', '".$EventName."')";

if(mysqli_query($connection, $sql)){  //creates user, echo nothing if successful, echo error message and kills script if failed
        echo "";}
        else{
        echo "Failed to add note " . mysqli_error($connection); //will fail on user existing(expected error) or other(unexpected)
        die("");}
		
			#return id of created event

$query = "SELECT * FROM events where id=LAST_INSERT_ID()"; //store sql statement to pass in the msqi query function
$result = mysqli_query($connection,$query);     //store query so its easier to deal with

if(!$result){ die("Database query failed on ID return.");} //error code for failed query

$row = mysqli_fetch_assoc($result); //store row in an assoc array

echo $row['id'];

?>
