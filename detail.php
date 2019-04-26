<?php 
	$tid=$_GET["tid"];
	$fh=fopen('./index.txt', 'r');
	$i=1;
	while( $res=fgetcsv($fh) ) {
		if($tid==$i){
			echo "<h1>";
			print_r($res[1]);
			echo "</h1>";
		}
		$i++;
	};
	echo "<hr>";
	echo "<a href='list.php' style='color:#00a7f5;'>返回留言列表</a>";
?>
