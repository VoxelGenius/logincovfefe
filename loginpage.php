<!DOCTYPE html>
<html>
<head>
	<title>Krusty Krabs</title>
	<link href='https://fonts.googleapis.com/css?family=Product+Sans:400,400i,700,700i' rel='stylesheet' type='text/css'>
	<link href="https://fonts.googleapis.com/css?family=Josefin+Sans|Quicksand|Varela+Round" rel="stylesheet">
	<link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'>
  	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
</head>
<body>
<style type="text/css">
	* {
		font-family: "Josefin Sans";
	}
	.login-box {
		border: solid 1px grey;
		width: 500px;
		margin: 100px auto;
		padding: 20px;
		box-sizing: border-box;
	}
	h1 {
		text-align: center;
		font-weight: 1000;
	}
	.inputs {

	display: inline-block;
	margin: 15px auto;
	width: 100%;
	padding: 10px 8px;
	box-sizing: border-box;
	border: solid 1px black;
	}
	a {
		color: black;
	}
	p {
		color: grey;

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
<h1>The Workplace</h1>
 <div class = "login-box">
 <form action = logindata.php method="post">
 	<input class = "inputs" type="text" name="email" placeholder="Email"><br>
 	<input class = "inputs" type="password" name ="password" placeholder="Password"><br>
 	<input class = "submits" type="submit" name = "Login" value = "Login">
 </form>
 <p>Don't have an account? <a href = register.php target="_blank">Register </a></p> 
 </div>
 
</body>
</html>