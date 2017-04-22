<?php
#getUserInfo(String username,int userID)
#will display row in json format

$username=$_GET['username'];	//store username from url get
$userID=$_GET['userID'];	//store userid from url get
$connection=mysqli_connect("127.0.0.1","root","33803380","3380"); //connect to the server

if(mysqli_connect_errno()){
	die("Database connection failed: " . mysqli_connect_error() . "(" . mysqli_connect_errno() . ")" ); }
	//error code for if connection fails

$query = "SELECT * FROM user WHERE UserID=". $userID; //store sql statement to pass in the msqi quessy function
$result = mysqli_query($connection,$query);	//store query so its easier to deal with

if(!$result){ die("Database query failed.");} //error code for failed query

$row = mysqli_fetch_assoc($result); //store row in an array

//$row["id"];		//output user id

//$row = array();
//while($r=mysqli_fetch_assoc($result)){
//	$row[] = $r;
//}

print json_encode($row);	//print out the array in json format to be parsed by the app

mysqli_close($connection);
//disconnect
?>
