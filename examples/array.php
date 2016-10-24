<?php
	$a=array("Fruits"=>"Apple","Vegtables"=>"Broccoli","Milk"=>"Whole");
	print_r(array_keys($a));
	echo array_search("Apple",$a);

	function example_funct($value,$key){
		echo "$key with a value of $value<br>";
	}
	array_walk($a, "example_funct")
?>
