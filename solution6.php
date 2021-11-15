<?php
function binaryToDecimal($num){
	//cast from int to string
	$binary = (string)$num;
	//bindec is a function that takes a binary number as string and convert to decimal
	return bindec($binary);
}

echo binaryToDecimal(111);

?>