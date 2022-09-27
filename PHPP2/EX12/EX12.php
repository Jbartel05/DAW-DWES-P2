<?php
function primo(){
    $numero=array(12,7,5);
    $s=2;
    foreach ($numero as $nprimo) {

        if (($nprimo % $s) == 0) {
            echo "el numero ".$nprimo."  es primo";
            echo "</br>";
        }else{
        echo "</br>";
        echo "el numero ".$nprimo."  no es primo";
        echo "</br>";
        }
    }

}



?>
<?php
primo();

?>