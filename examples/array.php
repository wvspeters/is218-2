<?php
	$a=array("Fruits"=>"Apple","Vegtables"=>"Broccoli","Milk"=>"Whole");
	print_r(array_keys($a));
	echo array_search("Apple",$a);

	function example_funct($value,$key){
		echo "$key with a value of $value<br>";
	}
	array_walk($a, "example_funct");

	$b=array("test1","test2", "test3");
	array_pop($b);
	print_r($b);
	
	array_push($b,"test4", "test5");
	print_r($b);

	$c=array_combine($a, $b);
	print_r($c);

?>
