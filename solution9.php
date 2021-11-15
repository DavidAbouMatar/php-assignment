<?php

function removeEntry($arr, $item){
	foreach($arr as $index => $value){
		if($value == $item){
			//unset removes element from an array
			unset($arr[$index]);
		}
	}
	return $arr;
}

// $arr = [1,13,56,75,75,80,90];

// print_r(removeEntry($arr, 75));
?>