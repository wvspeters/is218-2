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

	$file = fopen("contacts.csv","r");
	print_r(fgetcsv($file));
	fclose($file);

	$d=array("Fruit2"=>"Apple","Vegtables2"=>"Broccoli");

	$result=array_intersect($a,$d);
	print_r($result);

	$im=array('Hi','People','Of','Earth');
	echo implode(" ",$im);
	echo explode("Of",$im);

	print_r(array_chunk($d,1));

	print_r(array_slice($a,2));


?>
