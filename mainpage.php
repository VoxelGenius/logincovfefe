<?php
session_start();
include "sqlconn.php";
if ($_SESSION['logged_in']!=1) {
	$_SESSION['message'] = "You must login before viewing this page.";
	header("location:errorpage.php");
}
else {
	$username = $_SESSION['username'];
	$email = $_SESSION['email'];
	$logintime = $_SESSION['logintime'];
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Welcome <?= $username?></title>
	<link href='https://fonts.googleapis.com/css?family=Product+Sans:400,400i,700,700i' rel='stylesheet' type='text/css'>
	<link href="https://fonts.googleapis.com/css?family=Josefin+Sans|Quicksand|Varela+Round" rel="stylesheet">
	<link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'>
  	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
  	<link href="https://fonts.googleapis.com/css?family=Roboto+Mono" rel="stylesheet">
</head>
<body>
<style type="text/css">
	.buttons {
	background-color: white;
    color: black;
    border: solid 2px black;
    display: inline-block;
    margin: 30px auto;
    width: 75px;
    padding: 10px 8px;
    box-sizing: border-box;
    font-family: "Josefin Sans";
    font-weight: 600;

	}
h2 {
		margin: 15px auto 0px auto;
		font-weight: 600;
		font-size: 150px;
		text-align: center;
}
.img-container {
	width: 120px;
	margin: 5px auto;
	text-align: center;
}
* {
		font-family: "Josefin Sans";
		
		
	}
p {
	
	font-size: 18px;
	text-align: center;
	margin: 3px auto 40px auto;
}
.date {
	margin: 3px 5px;
	display: inline-block;
	font-family: "Roboto Mono";
	font-weight: lighter;
	border: solid 1px black;
	padding: 3px;
}
li {
	list-style-type: none;
	
	margin: 5px auto;
	font-weight: bold;
	width: 100px;
	text-align: center;
	box-sizing: border-box;
	padding: 5px;
}
h1 {
	text-align: center;
	font-size: 70px;
	letter-spacing: 3px;
	margin: 3px auto;
}
.time {
	
	text-align: center;
	margin: 3px auto 10px auto;
}
.logcontainer {
	text-align: center;
}
</style>
<h1>Welcome <?php echo " $username"?></h1>
<p class = time>Time of Login:<span class = "date"><?php echo "$logintime"?></span></p>

<h2>Covfefe!</h2>
</div>
<p>You are not alone. These are other users that have been here:</p>
<?php
$query = $mysqli->query("SELECT username FROM logindata");

if ($query->num_rows==0) {
	//$_SESSION['message'] = "Oops, you are the first fool. ";
	$fool = "Oops, you are the first fool. ";
	echo "<p>".$fool."</p>";
	//header("location: errorpage.php");
}
else {
	while ($user = $query->fetch_assoc()) {
		//echo "<ul class = "list">";
		echo "<li>".$user["username"]."</li>";
		//echo "</ul>"
	}

}

?>
<div class= logcontainer>
<a href="logout.php"><button class="buttons"/>Logout</button></a>
</div>



</body>
</html>