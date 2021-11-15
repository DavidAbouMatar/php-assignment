<?php

function factorial($num){
	$factor = 1;
	for($i=$num; $i>=1; $i--){
		$factor = $factor * $i;
	}
	return $factor;
	}

echo factorial(3);
?>

