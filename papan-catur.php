<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PAPAN CATUR</title>
</head>
<body>
	<h2>PAPAN CATUR</h2>
	<?php

function papan_catur($angka) {
// tulis kode di sini
	echo "Papan Catur ". $angka. "<br>";
	
	for ($i=0; $i<$angka; $i++)
	{
		for ($h=0;$h<$angka*2-($i%2);$h++)
		{
			if ($i%2 == 0 && $h%2 == 0)
				echo "#";
			if ($i%2 == 0 && $h%2 == 1)
				echo "&nbsp";
			if ($i%2 == 1 && $h%2 == 0)
				echo "&nbsp";
			if ($i%2 == 1 && $h%2 == 1)
				echo "#";
		}
                    
		echo "<br>";
	}
	echo "<br><br>";
}

// TEST CASES
echo papan_catur(4); 
/*
# # # #
 # # #
# # # #
 # # #
 */

echo papan_catur(8);
/* 
# # # # # # # #
 # # # # # # # 
# # # # # # # #
 # # # # # # # 
# # # # # # # #
 # # # # # # #
# # # # # # # #
 # # # # # # #
*/

echo papan_catur(5) ;
/*
# # # # #
 # # # #
# # # # #
 # # # # 
# # # # #
*/
?>
</body>
</html>