<?php
foreach($_POST['table'] as $variable) 

	for($v=0; $v <= 10; $v = $v+1){

	echo ($v."*".$variable."=".$v*$variable."</br>");
	}
    	
?>
	