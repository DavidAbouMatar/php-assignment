<?php

function minMax($arr){
	
	$min= 1000;
	$max = 0;
	foreach($arr as $num){

		if($num < $min){
		$min = $num;
		}
		if($num > $max){
		$max = $num;
		}
	}
	print("the maximum number is: $max , the minimum number is: $min");

	}



$arra = [123,13,1,12];
minMax($arra);
?>