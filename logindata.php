<!DOCTYPE html>
<html>
<head>
	<title>Welcome!</title>
</head>
<body>
<h1>Welcome</h1>
<?php 
session_start();
include 'sqlconn.php';
$femail = $mysqli->escape_string($_POST['email']);
$query = $mysqli->query("SELECT * FROM logindata WHERE email = '$femail'");

if ($query->num_rows==0) {
	$_SESSION['message'] = "user does not exist";
	//echo $err;
	header("location: errorpage.php");
}

else { 
	$user = $query->fetch_assoc();
	//print $user['email'];

    if ( password_verify($_POST['password'], $user['password']) ) {
        
    	//echo "<br> Hello " .$user['username']. " your login was succesful.";
    	//echo "your account was created on:  ".$user['logintime'];
        $_SESSION['email'] = $user['email'];
        $_SESSION['username'] = $user['username'];
        $_SESSION['logintime'] = $user['logintime'];
        $_SESSION['logged_in'] = true;
		
		header("location: mainpage.php");
    }
    else {
    	$_SESSION['message'] = " You have entered wrong password, try again!";
        header("location: errorpage.php");
    }
}

?>
</body>
</html>