
<?php
function triangulo($filas){
    $cadena = null;
    for($nfilas=0; $nfilas<=$filas; $nfilas++){
        for($ncolumnas=0;$ncolumnas<$nfilas;$ncolumnas++){
            echo"*";
        }
        echo"</br>";

    }
    for($nfilas=0;$nfilas<=$filas;$nfilas++){
        $cadena ="";
        for($ncolumnas=$filas-$nfilas;0<$ncolumnas;$ncolumnas--){

        }
        echo $cadena."</br>";
    }
    }
triangulo(10);