<?php
Function mayuscula()
{
    $Palabras = array('HOLA', 'Joel', 'EstaMos HaCiEndo Classe');
    foreach ($Palabras as $prueba) {
        if (ctype_upper($prueba)) {
            echo "La Palabra $prueba contiene todo letras mayúsculas.\n";
            echo "</br>";
        } else {
            echo "<br>";
            echo "La Palabra $prueba no contiene todo  letras mayúsculas.\n";
            echo "</br>";
        }
    }
}
?>

<?php
mayuscula();
?>