<?php
$x = 6;
$iteracijos = 1;
echo "Pradinė reikšmė: $x<br>";
while ($x != 1) {
    if ($x % 2 == 0) {
        $x = $x / 2;
    } else {
        $x = 3 * $x + 1;
    }
    echo $x . "<br>";
    $iteracijos++;
}
echo "Iteracijų kiekis: $iteracijos";
?>