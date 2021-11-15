<?php
$list1 = "4, 5, 6, 7";
$list2 = "4, 5, 7, 8";
// implode joins value as a string ,array_unique: removes duplicate ,array_merge: merges 2 lists , explode Returns an array of strings

$unique_valye = implode("," ,array_unique(array_merge(explode(",", $list1) , explode(",", $list2)))) ;
print($unique_valye);
?>