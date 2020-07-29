<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TENTUKAN DERET ARITMETIKA</title>
</head>
<body>
    <h2>TENTUKAN DERET ARITMETIKA</h2>
    <?php
        function tentukan_deret_aritmatika($arr) {
        
        // kode di sini

            echo "<pre>"; 
            print_r($arr) ;
            echo "</pre>"; 
          
             echo "tentukan deret aritmatika: ";
           
            $x=$arr[1]-$arr[0];
            $result = true;
            for($i=1; $i<count($arr); $i++)
                {
                if($arr[$i]-$arr[$i-1] != $x) 
                {
                $result = false;
                break;
                }
            }
            if ($result == true)
            {
                echo "true <br><br>";
            }
            else
            {
                echo "false <br><br>";
            }
        }

        // TEST CASES
        echo tentukan_deret_aritmatika([1, 2, 3, 4, 5, 6]);// true
        echo tentukan_deret_aritmatika([2, 4, 6, 12, 24]);// false
        echo tentukan_deret_aritmatika([2, 4, 6, 8]); //true
        echo tentukan_deret_aritmatika([2, 6, 18, 54]);// false
        echo tentukan_deret_aritmatika([1, 2, 3, 4, 7, 9]);// false
    ?>
</body>
</html>