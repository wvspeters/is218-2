<?php
	$str="Hello World!";
	echo chunk_split($str,1,".");

	echo count_chars($str,3);

	print_r(explode(" ",$str));

	$str = "<© W3Sçh°°¦§>";
	echo htmlentities($str);


?>
