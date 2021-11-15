<?php
$arr = [1,13,56,75,75,80,90];
$max_value = 0;
$index = 0;
foreach($arr as $i => $num){
	if($num > $max_value){
		$max_value = $num;
		$index = $i;
}}
print("the index of the hieghst value is: $index");


?>