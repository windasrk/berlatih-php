<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>SKOR TERBESAR</title>
</head>
<body>
  <h2>SKOR TERBESAR</h2>
  <?php
  $skor = [
    [
      "nama" => "Bobby",
      "kelas" => "Laravel",
      "nilai" => 78
    ],
    [
      "nama" => "Regi",
      "kelas" => "React Native",
      "nilai" => 86
    ],
    [
      "nama" => "Aghnat",
      "kelas" => "Laravel",
      "nilai" => 90
    ],
    [
      "nama" => "Indra",
      "kelas" => "React JS",
      "nilai" => 85
    ],
    [
      "nama" => "Yoga",
      "kelas" => "React Native",
      "nilai" => 77
    ],
  ];

  function skor_terbesar($x, $y) {
    if ($x['nilai'] == $y['nilai'])
    {
      return 0;
    }
    return ($x['nilai'] > $y['nilai']) ? -1 : 1;
  }

  uasort($skor, 'skor_terbesar');
  echo "<pre>"; 
  print_r($skor); 
  echo "</pre>"; 
/* OUTPUT
  Array (
    [Laravel] => Array
              (
                [nama] => Aghnat
                [kelas] => Laravel
                [nilai] => 90
              )
    [React Native] => Array
                  (
                    [nama] => Regi
                    [kelas] => React Native
                    [nilai] => 86
                  )
    [React JS] => Array
                (
                  [nama] => Indra
                  [kelas] => React JS
                  [nilai] => 85
                )
  )
*/
  ?>
</body>
</html>