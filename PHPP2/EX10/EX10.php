<?php


arrayClaveValor(['Bmw' => "12", 'Mercedes' => "5", 'Audi' => "32"], "asc", "clave");

function arrayClaveValor($coches, $orden, $elemento)
{

    if ($orden == "asc" && $elemento == "clave") {
        ksort($coches);
        foreach ($coches as $nombre => $num) {
            echo "Els números son: " . $num . '<br>';
        }
    } elseif ($orden == "desc" && $elemento == "clave") {
        ksort($coches);
        foreach ($coches as $nombre => $num) {
            echo "Els números son: " . $num . '<br>';
        }
    }

    if ($orden == "asc" && $elemento == "ele") {
        krsort($coches);
        foreach ($coches as $nombre => $num) {
            echo "Els números son: " . $num . '<br>';
        }
    } elseif ($orden == "desc" && $elemento == "ele") {
        krsort($coches);
        foreach ($coches as $nombre => $num) {
            echo "Els números son: " . $num . '<br>';
        }


    }
}