<?php
#POST
#login(String email,String password)
#checks if user and pass combo is correct
#output 'true' if correct, 'invalid email/password combonation.' if not correct

$body = file_get_contents('php://input'); //gets POST body

$json = json_decode($body,true); //converts to json (format we are using)
    
$pass=$json['password'];        
$email=$json['email'];

$connection=mysqli_connect("127.0.0.1","root","33803380","3380"); //connect to the server
//TODO make this connection secure when we launch for real
if(mysqli_connect_errno()){
        die("Database connection failed: " . mysqli_connect_error() . "(" . mysqli_connect_errno() . ")" ); }
        //error code for if connection fails
$query = "SELECT * FROM user WHERE email LIKE '". $email."'"; //store sql statement to$
$result = mysqli_query($connection,$query);     //store query so its easie$
//echo "query= ".$query."\n";
if(!$result){ die("Database query failed.");} //error code for failed query
//echo "wut2";

$row = mysqli_fetch_assoc($result);
//print_r($row);
echo ($row['email']===$email && $row['password']===$pass) ? $row['UserID'] :"invalid email/password combination.";

				#result


mysqli_close($connection);
//disconnect
 ?>

