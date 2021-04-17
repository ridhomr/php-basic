<!DOCTYPE html>
<html>
<head>
	<title>belajar php</title>
</head>
<body>
	<?php
		// --------str method --------
		// strlen && str_word_count
		// str_replace(find, replace, string)
		// str_repeat(text, times); str_shuffle(text)

/*	$text = "hai semuanya";
	echo strlen($text);*/

/*	$text1 = "hai semuanya";
	echo str_word_count($text1);*/

	$text1 = "hai semuanya";
	echo str_replace("hai", "hallo", $text1);
	

	$text1 = "hai semuanya";
	echo str_repeat("hai ", 10 );

	$text1 = "hai semuanya";
	echo str_repeat(str_replace("hai", "hallo", $text1), 10);
	?>
</body>
</html>