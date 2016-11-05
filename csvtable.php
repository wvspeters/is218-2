<DOCTYPE! html>
<html>
<head>
	<title>Html Table from array</title>
</head>
<body>
	<?php
	function readCSV($csvFile){
		$file_handle = fopen($csvFile, 'r');
		while (!feof($file_handle) ) {
			$line_of_text[] = fgetcsv($file_handle, 1024);
		}
		fclose($file_handle);
		return $line_of_text;
	}


	$csvFile = 'csvtable.csv';
	$csv = readCSV($csvFile);
	/**$os = array(
 	    array('Windows' , 'Mac' , 'Linux' ),
            array('Meh' , ':P' , 'Good' ),
	);
	**/
	echo '<table border="1">';
	echo '<tr><th>Test1</th><th>Test2</th><th>Test3</th></tr>';
	foreach( $csv as $test )
	{
	    echo '<tr>';
	    foreach( $test as $key )
	    {
	        echo '<td>'.$key.'</td>';
	    }
	    echo '</tr>';
	}
	echo '</table>';
	?>
</body>
</html>
