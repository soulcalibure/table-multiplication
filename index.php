<?php
$table=$_POST["table"];

function result($table){
	
	$v=0;
	while($v < 10) {
	$v = $v+1;

	echo ($v."*".$table."=".$v*$table."</br>");
}	
}
result($table);
?>