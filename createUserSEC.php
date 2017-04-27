<?php
#POST
#createUserSEC(String username,String password,String email)
#creates user with POST method to be more secure than GET method 
	#depricate GET version once this is working

$body = file_get_contents('php://input'); //gets POST body

$json = json_decode($body,true); //converts to json (format we are using)

$username=$json['username'];    
$pass=$json['password'];        
$email=$json['email'];

$connection=mysqli_connect("127.0.0.1","root","33803380","3380"); //connect to the server
//TODO make this connection secure when we launch for real
if(mysqli_connect_errno()){
        die("Database connection failed: " . mysqli_connect_error() . "(" . mysqli_connect_errno() . ")" ); }
        //error code for if connection fails

$sql =  "INSERT INTO `user` (`userID`, `username`, `ApartmentID`, `email`, `password`, `emergency name`, `emergency contact`, `profile pic`) VALUES (NULL, '". $username ."', NULL, '" . $email . "', '" . $pass . "', NULL, NULL, NULL)"; //store sql statement to pass in the msqi quessy function
//$result = mysqli_query($connection,$query);     //store query so its easier to deal with

if(mysqli_query($connection, $sql)){  //creates user, echo nothing if successful, echo error message and kills script if failed
	echo "";}
	else{
	echo "Failed to add user " . mysqli_error($connection); //will fail on user existing(expected error) or other(unexpected)
	die("");}

				#output new user info

$query = "SELECT * FROM user WHERE email='". $email ."'"; //store sql statement to pass in the msqi quessy function
$result = mysqli_query($connection,$query);     	  //store query so its easier to deal with

if(!$result){ die("Database query failed.");} 		 //error code for failed query
$row = mysqli_fetch_assoc($result); 			 //store row in an array

echo $row['UserID']; 					//return id

mysqli_close($connection);
//disconnect
 ?>

