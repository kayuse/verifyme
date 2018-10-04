<?php

echo "Hello friend, let's do this oya put in your string ";
$handle = fopen ("php://stdin","r");
$string = trim(fgets($handle));

function palindrome($string) : bool {
	$reverseString = reverse($string);
	
	return $string == $reverseString;

}

function reverse($string){
	$reverse = "";
	$len = strlen($string);
	for($i = $len - 1; $i >= 0; $i--){
		$reverse .= $string[$i];
	}
	return $reverse;
}

$result = palindrome($string);


$response = $result == true ? "Yes it is palindrome" : "Oops no";

echo $response; 