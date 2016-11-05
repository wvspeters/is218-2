<DOCTYPE! html>
<html>
<head>
	<title>Html Table from array</title>
</head>
<body>
	<?php
	$os = array(
 	    array('Windows' , 'Mac' , 'Linux' ),
            array('Meh' , ':P' , 'Good' ),
	);

	echo '<table border="1">';
	echo '<tr><th>OS</th><th>Test</th><th>Director</th></tr>';
	foreach( $os as $osop )
	{
	    echo '<tr>';
	    foreach( $osop as $key )
	    {
	        echo '<td>'.$key.'</td>';
	    }
	    echo '</tr>';
	}
	echo '</table>';
	?>
</body>
</html>
