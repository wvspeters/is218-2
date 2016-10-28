<?php
	$str="Hello World!";
	echo chunk_split($str,1,".");

	echo count_chars($str,3);

	print_r(explode(" ",$str));

	$str1="<© W3Sçh°°¦§>";
	echo htmlentities($str);

	$str2="This is some &lt;b&gt;bold&lt;/b&gt; text.";
	echo htmlspecialchars_decode($str);

	$arr=array('Hello','World!','Beautiful','Day!');
	echo implode(" ",$arr);

	$str3="Hello";
	echo md5($str3);

	array str_getcsv(string $input[,string $delimiter = ','[,string $enclosure = '"'[,string
	$escape = '\\']]]);

?>
