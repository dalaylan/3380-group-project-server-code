<?php
#createUser(String username,String email,String password)
#returns userid of new user


				#add user to the user table

$username=$_GET['username'];    //store username from url get
$pass=$_GET['password'];        //store userid from url get
$email=$_GET['email'];
$connection=mysqli_connect("127.0.0.1","root","33803380","3380"); //connect to the server
//TODO make this connection secure when we launch for real
if(mysqli_connect_errno()){
        die("Database connection failed: " . mysqli_connect_error() . "(" . mysqli_connect_errno() . ")" ); }
        //error code for if connection fails

$sql =  "INSERT INTO `user` (`id`, `name`, `Apartment`, `email`, `password`, `emergency name`, `emergency contact`, `profile pic`) VALUES (NULL, '". $username ."', NULL, '" . $email . "', '" . $pass . "', NULL, NULL, NULL)"; //store sql statement to pass in the msqi quessy function
//$result = mysqli_query($connection,$query);     //store query so its easier to deal with

if(mysqli_query($connection, $sql)){  //creates user, echo nothing if successful, echo error message and kills script if failed
	echo "";}
	else{
	echo "Failed to add user " . mysqli_error($connection); //will fail on user existing(expected error) or other(unexpected)
	die("");}



				#output new user info


//not working
$query = "SELECT * FROM user WHERE email='". $email ."'"; //store sql statement to pass in the msqi quessy function
$result = mysqli_query($connection,$query);     //store query so its easier to deal with

if(!$result){ die("Database query failed.");} //error code for failed query

$row = mysqli_fetch_assoc($result); //store row in an array

print json_encode($row);        //print out the array in json format to be parsed by the app


mysqli_close($connection);
//disconnect
 ?>
