<?php
/* Displays all error messages */
session_start();
?>
<!DOCTYPE html>
<html>
<head>
  <title>Error</title>
  <link href='https://fonts.googleapis.com/css?family=Product+Sans:400,400i,700,700i' rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans|Quicksand|Varela+Round" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Mono" rel="stylesheet">
</head>
<body>
<style type="text/css"> 
* {
    font-family: "Josefin Sans";
}
.buttons {

    background-color: black;
    color: white;
    border: solid 1px black;
    font-weight: bold;
    font-family: "Josefin Sans";
    display: inline-block;
    margin: 15px auto;
    width: 100px;
    padding: 10px 8px;
    box-sizing: border-box;

}
a {
    text-decoration: none;
}
.container {
        border: solid 1px grey;
        width: 500px;
        margin: 100px auto;
        padding: 20px;
        box-sizing: border-box;

}
.error {
    padding: 10px;
    margin: 20px 0px;
    font-family:"Roboto Mono";
}
</style>
<div class="container">
    <h1>Error</h1>
    <p class = "error">
    <?php 
    if( isset($_SESSION['message']) AND !empty($_SESSION['message']) ): 
        echo $_SESSION['message'];    
    else:
        header( "location: loginpage.php" );
    endif;
    ?>
    </p>     
    <a href="loginpage.php"><button class="buttons">Go back</button></a>
</div>
</body>
</html>