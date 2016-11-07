<html>
<head>
	<title>Homework5</title>
</head>
<body>
	<?php
	$tester = 1;
	$tester2 = NULL;
	$tester3 = array();

	if (isset($tester)){
		echo "Test 1 Pass";
	}
	else {
		echo "Test 1 Fail";
	}
	echo "<br>";
	if (empty($tester3)){
		echo "Test 2 Pass";
        }
	else {
		echo "Test 2 Fail";
	}
	echo "<br>";
	if (is_null($tester2)){
		echo "Test 3 Pass";
	}
	else {
		echo "Test 3 Fail";
	}
	echo "<br>";
	if (is_null($tester2) or isset($tester2)){
		echo "Test 4 Pass";
	}
	else {
		echo "Test 4 Fail";
	}
	echo "<br>";


	switch ($tester1){
		case isset($tester1):
			echo "Tester 1 is set";
			break;
		case empty($tester1):
			echo "Tester 1 is empty";
			break;
		case is_null($tester1):
			echo "Tester 1 is NULL";
			break;
	}
	echo "<br>";
	
	switch ($tester2){
	        case isset($tester2):
		        echo "Tester 2 is set";
			break;
		case empty($tester2):
                        echo "Tester 2 is empty";
	                break;
		case is_null($tester2):
			echo "Tester 2 is NULL";
			break;
	}
	echo "<br>";

	switch ($tester3){
                case isset($tester3):
		        echo "Tester 3 is set";
			break;
		case empty($tester3):
			echo "Tester 3 is empty";
			break;
                case is_null($tester3):
			echo "Tester 3 is NULL";
			break;
	}
	
	?>
</body>
</html>
