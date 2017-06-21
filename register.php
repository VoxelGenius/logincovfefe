<!DOCTYPE html>
<html>
<head>
	<title>Register</title>
	<link href='https://fonts.googleapis.com/css?family=Product+Sans:400,400i,700,700i' rel='stylesheet' type='text/css'>
	<link href="https://fonts.googleapis.com/css?family=Josefin+Sans|Quicksand|Varela+Round" rel="stylesheet">
</head>
<body>
<style type="text/css">
	* { font-family: "Josefin Sans" }
	.register-box {
		width: 500px;
		height: 100%;
		margin: 0 auto;
		padding: 30px;
		border: solid 1px black;
		box-sizing: border-box;
	}
	.inputs {
	
	margin: 15px auto;
	width: 100%;
	padding: 10px 8px;
	box-sizing: border-box;
	border: solid 1px black;
	}
	.submits {
	background-color: black;
	color: white;
	display: inline-block;
	margin: 15px auto;
	width: 100%;
	padding: 10px 8px;
	box-sizing: border-box;

	}

</style>


<h2>The Workplace</h2>
<div class="register-box">
<form method="post" action="registerdata.php">  
  <input class = "inputs" type="text" name="name" placeholder="Name">
  <br>
  <input class = "inputs" type="text" name="email" placeholder="E-mail">
  <br>
  <input class = "inputs" type="password" name="password" placeholder="password">
 
  <br><br>
  <input class = "submits" type="submit" name="submit" value="Submit">  
</form>
</div>
</body>
</html>