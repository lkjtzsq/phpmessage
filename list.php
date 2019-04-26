<!DOCTYPE html>
<html>
<head>
	<title>我的留言板</title>
	<meta charset="utf-8">
	<meta name="viewport" conent="width=device-width,initial-scalable=1,user-scalable=0,minimum-scale=1,maximum-scale=1">
	<style type="text/css">
		*{ margin:0;padding: 0; }
		ul,ol{ list-style-type: none; }
		body{ font-size: 14px;font-family: Microsoft YaHei;color:#333333; }
		a{ color:#00a7f5; }
		.container{ margin:40px auto;text-align: center;font-size: 20px;line-height: 40px; }
	</style>
</head>
<body>
	<h1 style="text-align:center;padding-top:50px;">留言列表</h1>
	<?php 
		echo "<div class='container'><ul>";
		$fh=fopen('./index.txt', 'r');
		$i=1;
		while( $res=fgetcsv($fh) ) {
			$res="<li><a href=detail.php?tid=".$i.">".$res[0]."</a></li>";
			print_r($res);
			$i++;
		};
		echo "</ul></div>";
	?>
	<hr>
	<p style="text-align:center;margin-top:50px;"><a href="index.html">返回留言板</a></p>
</body>
</html>