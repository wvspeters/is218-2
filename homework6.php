<!DOCTYPE html>
<html>
<head>
	<title>Homework 6</title>
</head>
<body>
	<?php
	function foo($arg1 = '', $arg2 = ''){
		echo "arg1: $arg1\n";
		echo "arg2: $arg2\n";
	}

	$files = glob('*.php');
	print_r($files);

	echo "Initial: ".memory_get_usage()." bytes \n";
	for ($i = 0; $i < 100000; $i++){
		$array []=md5($i);
	}

	for ($i = 0; $i < 100000; $i++){
		unset($array[$i]);
	}

	echo "Final: ".memory_get_usage()." bytes \n";

	echo "Peak: ".memory_get_peak_usage()." bytes \n";

	print_r(getrusage());

	echo md(time() . mt_rand(1,1000000));

	echo uniqid();

	$myvar = array(
		'hello',
		42,
		array(1,'two'),
		'apple');
	$string = serialize($myvar);

	echo $string;

	$newvar = unserialize($string);

	print_r($newvar);

	$string =
	"Lorem ipsum dolor sit amet, consectetur
	adipiscing elit. Nunc ut elit id mi ultricies
	adipiscing. Nulla facilisi. Praesent pulvinar,
	sapien vel feugiat vestibulum, nulla dui pretium orci,
	non ultricies elit lacus quis ante. Lorem ipsum dolor
	sit amet, consectetur adipiscing elit. Aliquam
	pretium ullamcorper urna quis iaculis. Etiam ac massa
	sed turpis tempor luctus. Curabitur sed nibh eu elit
	mollis congue. Praesent ipsum diam, consectetur vitae
	ornare a, aliquam a nunc. In id magna pellentesque
	tellus posuere adipiscing. Sed non mi metus, at lacinia
	augue. Sed magna nisi, ornare in mollis in, mollis
	sed nunc. Etiam at justo in leo congue mollis.
	Nullam in neque eget metus hendrerit scelerisque
	eu non enim. Ut malesuada lacus eu nulla bibendum
	id euismod urna sodales. ";
	
	$compressed = gzcompress($string);

	echo "Original size: ". strlen($string)."\n";

	echo "Compressed size: ". strlen($compressed)."\n";

	$original = gzuncompress($string);

	$start_time = microtime(true);

	echo "execution took: ". (microtime(true) - $start_time). " seconds.";
	?>
</body>
</html>
