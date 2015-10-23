<!DOCTYPE html>
<html lang="sv">

<head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="style.css">
    <script src="http://code.jquery.com/jquery-latest.min.js"></script>
    <script src="script.js"></script>
</head>

<body>
    <?php
    $tal1 = 30;
    $tal2 = 13;

    $summa = $tal1 + $tal2;
    $produkt = $tal1 * $tal2;
    $sub = $tal1 - $tal2;
    $division = $tal1 / $tal2;
    $modulus = $tal1 % $tal2;
    $exponent = $tal1 ** $tal2;
    echo $modulus;

    $har5fingrar = true;
    $har6tar = false;
    $losenord = "1234";
    $sats = $har5fingrar and $har6tar;
    echo $sats;
    if ($losenord == "test123") {
   echo "Ditt lösenord suger!";
}
    if ($losenord == "1234") {
        echo "Du har loggat in 6391gånger från 6232olika platser innom de senaste 24timmarna...";
    }
    else {
        echo "hur kan du ens skriva fel med ett sådant lösenord!!!";
    }
    if ($tal1 > 20 && $tal1 < 50) {
        echo "<p>talet är mellan 20 och 50</p>";
    }
    if ($har5fingrar && $har6tar) {
        echo "svaret är sant";
    }
    else {
        echo "svaret är falskt";
    }
    for ($i = 1; $i <= 20; $i++) {
        echo "<p>i = $i</p>";
    }
    $it = 0;
    while ($it <= 10) {
        echo "i2=$it";
        $it++;
    }
    ?>
</body>

</html>
