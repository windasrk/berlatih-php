<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>TENTUKAN DERET GEOMETRI</title>
</head>
<body>
	<h2>TENTUKAN DERET GEOMETRI</h2>
<?php
function tentukan_deret_geometri($arr) {
// kode di sini
           echo "<pre>"; 
            print_r($arr) ;
            echo "</pre>"; 
           
              echo "tentukan deret geometri: ";
            $r=$arr[1]/$arr[0];
            $result = true;
            for($i=1; $i<count($arr); $i++){
                if($arr[$i]/$arr[$i-1] != $r) {
                    $result = false;
                break;
                }
            }
            if ($result == true){
                echo "true <br><br>";
            }
            else{
                echo "false <br><br>";
            }
        }
        //TEST CASES
        echo tentukan_deret_geometri([1, 3, 9, 27, 81]); // true
        echo tentukan_deret_geometri([2, 4, 8, 16, 32]); // true
        echo tentukan_deret_geometri([2, 4, 6, 8]); // false
        echo tentukan_deret_geometri([2, 6, 18, 54]); // true
        echo tentukan_deret_geometri([1, 2, 3, 4, 7, 9]); //false
    ?>
</body>
</html>