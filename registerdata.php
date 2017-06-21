<?php 

$host = 'localhost';
$user = 'username';
$password ='phpexec';
$db = 'userdata';

//create mysql connection
$mysqli = new mysqli($host,$user,$password,$db);
if ($mysqli->connect_error) {
    printf("Connection failed: %s\n", $mysqli->connect_error);
    die();
}
//echo "connected <br>";
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	$_SESSION['email'] = $_POST['email'];
	$_SESSION['username'] = $_POST['name'];

	$username = $mysqli->escape_string($_POST['name']);
	$email = $mysqli->escape_string($_POST['email']);
	$password = $mysqli->escape_string(password_hash($_POST['password'], PASSWORD_BCRYPT));

	//echo "$username <br>";
	//echo "$email <br>";
	//echo "$password <br>";

      
	//Check if user with that email already exists
	$result = $mysqli->query("SELECT * FROM logindata WHERE email='$email'") or die($mysqli->error);

	// We know user email exists if the rows returned are more than 0
	if ( $result->num_rows > 0 ) {
    
    	$_SESSION['message'] = "User with this email already exists!";
    	//echo "User with this email already exists!";
    	header("location: errorpage.php");
    
	}

	else { // Email doesn't already exist in a database, proceed...*/
		$sql = "INSERT INTO logindata (username,email,password) VALUES ('$username','$email','$password')";
		if ($mysqli->query($sql)) { 

			$logquery = $mysqli->query("SELECT * FROM logindata WHERE email='$email'");
			$logarray = $logquery->fetch_assoc();
			$_SESSION['logintime'] = 

		

			$_SESSION['logged_in'] = true; 
			//echo "Registration successful!"; 
			//echo "return back to <a href ='phpxecthree.php'><button>Home</button></a>";
			header('location:mainpage.php');
		}
		else { 
			//echo "Registration failed: " . $sql . "<br>" . $mysqli->error;
			$_SESSION['message'] = "Registration failed: " . $sql . "<br>" . $mysqli->error;
			header("location: errorpage.php");
		}
	}
}

?>