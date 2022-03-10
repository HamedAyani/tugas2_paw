<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variable</title>
</head>
<body>
    <h1>Variable</h1>
    <?php
    $x=12;
    $y=13;
    $hasiladd=$x+$y;
    $hasilsub=$x-$y;
    $hasilmul=$x*$y;

    echo 'Penjumlahan <br>'.$x.' + '.$y.' = '.$hasiladd.'<br>';
    echo 'Pengurangan <br>'.$x.' - '.$y.' = '.$hasilsub.'<br>';
    echo 'Perkalian <br>'.$x.' * '.$y.' = '.$hasilmul;
    ?>
</body>
</html>