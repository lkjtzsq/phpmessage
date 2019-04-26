<?php 
	$str=$_POST["title"] . "," . $_POST["content"] . "\n";
	$fh=fopen('./index.txt', 'a');
	fwrite($fh, $str);
	echo "OK";
	echo "<hr>";
	echo "<a href='index.html' style='color:#00a7f5;'>返回留言板</a>";
?>