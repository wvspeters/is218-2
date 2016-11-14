<DOCTYPE! html>
<html>
<head>
	<title>Super Globals</title>
</head>
<body>
	<?php
	function test(){
		$foo = "local variable";

		echo '$foo in global scope: ' . $GLOBALS["foo"] . "\n";
		echo '$foo in current scope: ' . $foo . "\n";
	}

	$foo = "Example content";
	test();

	//Specifies the content of given variable
	
	echo $_SERVER['PHP_SELF'];

	//Specifies all server info

	echo 'Hello ' . htmlspecialchars($_GET["name"]) . '!';

	//Recieves variable information

	echo 'Hello ' . htmlspecialchars($_POST["name"]) . '!';

	//Sends variable information to server

	echo 'Hello ' . htmlspecialchars($_COOKIE["name"]) . '!';

	//Specifies current script html cookies

	echo 'My username is ' . $_ENV["USER"] . '!';
	?>
</body>
</html>
