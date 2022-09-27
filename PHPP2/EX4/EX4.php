<?php
$array = ["Helloklklklklk", "Buenosdias", "soy", "Batman"];
$max = strlen($array[0]);
$min = strlen($array[0]);
for ($parray = 0; $parray < count($array); $parray++ ) {
    if (strlen($array[$parray] > $min)) {
        $min = $array[$parray];
    }
    elseif (strlen($array[$parray] > $max)) {
        $max = $array[$parray];
    }
}
echo 'la palabra mas larga es: '.$max;
echo '<br>';
echo 'la palabra mas corta es: '.$min;
?>