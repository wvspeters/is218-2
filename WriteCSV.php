<?php

$list = array(
	array('test', 'tester', 'testest'),
	array('abc', '123', 'a2c')
	);

if (!file_exists("fileerror.csv")) {
	die("File not found");
} 
else {
	$fo = fopen("fileerror.csv", "w");
}

if (!is_writable("fileerror.csv")) { 
    echo "Cannot write to fileerror.csv";
    exit;
}

foreach ($list as $fields) {

	fputcsv($fo, $fields);
}

fclose($fo);


?>
