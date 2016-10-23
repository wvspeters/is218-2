<!DOCTYPE html>
<html>
<head>
	<title>Table Head</title>
</head>
<body>
	<?php
	$computer = array();
	$os = array();
	$rank = array();
	$computer = $_Post["computer"];
	$os = $_Post["os"];
	$rank = $_Post["rank"];
	?>
	<table>
	  <thead>
	    <tr>
	      <th>Computer</th>
	      <th>OS</th>
	      <th>Rank</th>
	    </tr>
	  </thead>
	  <tbody>
		<?php foreach ($computer as $key=>$value): $computer .= '<tr>'; 
			foreach($value as $key2=>$value2){$computer .= '<td>' . $value2 . '</td>';}
        	$computer .= '</tr>'; ?>
	   	<?php foreach ($os as $key=>$value): $os .= '<tr>'; 
			foreach($value as $key2=>$value2){$os .= '<td>' . $value2 . '</td>';}
        	$os .= '</tr>'; ?>
	  	<?php foreach ($rank as $key=>$value): $rank .= '<tr>'; 
			foreach($value as $key2=>$value2){$rank .= '<td>' . $value2 . '</td>';}
        	$rank .= '</tr>'; ?>
	  </tbody>
	</table>
</body>
</html>>
