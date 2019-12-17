 <?php

 	// ternary operators
 /*
 	$score = 20;
 	echo $score > 40 ? 'high score!' : 'low score :(';

 	// superglobals = allways $_CAPITAL LETTERS

 	// $_GET['name'], $_POST['name']

 	echo $_SERVER['SERVER_NAME'] . '<br />';
 	echo $_SERVER['REQUEST_METHOD'] . '<br />';
 	echo $_SERVER['SCRIPT_FILENAME'] . '<br />';
 	echo $_SERVER['PHP_SELF'] . '<br />';
 	*/

 	// $_SESSION, $_COOKIE <= FUTURE SUPERGLOBALS

 	// session variables: stores information on server while running

 	if(isset($_POST['submit'])){

 		session_start(); //starts a session

 		$_SESSION['name'] = $_POST['name'];

 		header('location: index.php');
 	}

 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title>php tuts</title>
 </head>
 <body>

 	<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
 		<input type="text" name="name">
 		<input type="submit" name="submit" value="submit">
 	</form>
 
 </body>
 </html>