<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PALINDROME ANGKA</title>
</head>
<body>
	<h2>PALINDROME ANGKA</h2>
<?php
function palindrome($str){
	$output = false;
	if(strrev($str) == $str){
		$output =  true;
	}
	return $output;
}

function palindrome_angka($angka) {
  // tulis kode di sini
	if ($angka >= 1 && $angka <=9){
		return $angka + 1;
	}
	if (palindrome($angka)) {
		$angka++;
	}
	while (palindrome($angka) == false){
		$angka++;
	}
	return $angka;
}

// TEST CASES
echo palindrome_angka(8). "<br>"; // 9
echo palindrome_angka(10). "<br>"; // 11
echo palindrome_angka(117). "<br>"; // 121
echo palindrome_angka(175). "<br>"; // 181
echo palindrome_angka(1000). "<br>"; // 1001

?>
</body>
</html>