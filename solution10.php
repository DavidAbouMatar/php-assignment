<?php
function union($arr1, $arr2){
	 //array_unique: removes duplicate ,array_merge: merges 2 lists ,
	return array_unique(array_merge($arr1,$arr2));
}

$arra = [1,13,56,75,7,80,90];
$arrb = [1,6,4,75,8,80,8];
print_r(union($arra,$arrb));
?>