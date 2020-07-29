<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PASANGAN TERBESAR </title>
</head>
<body>
     <h2>PASANGAN TERBESAR</h2>
 <?php
        function pasangan_terbesar($angka){
        // kode di sini
            echo "pasangan_terbesar ($angka) : ";

            $panjang = strlen($angka);
            $strAngka = strval($angka);
            $max=0;
            
            for($y=0; $y<$panjang; $y++)
            {
                $dua = substr($strAngka,$y,2);
                if($max<$dua)
                {
                    $max=$dua;
                }
            }
            echo $max . "<br><br>";
        }

        // TEST CASES
        echo pasangan_terbesar(641573); // 73
        echo pasangan_terbesar(12783456); // 83
        echo pasangan_terbesar(910233); // 91
        echo pasangan_terbesar(71856421); // 85
        echo pasangan_terbesar(79918293); // 99

        ?>
    
</body>
</html>