<?php

$arr = [123,13,1,12];
$odd_arr = [];
$even_arr = [];
foreach($arr as $num){
	
	if($num%2 != 0){
		array_push($odd_arr, $num);
	}else{
		array_push($even_arr, $num);
}}



// print_r($odd_arr);

// print_r($even_arr);
?>