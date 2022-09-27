<?php
for ($i = 0; $i<=9;$i++){

    for($l = 0; $l < $i; $l++){
        echo "*";
    }
    for($k=10; $k>$i; $k--){
        echo"&nbsp&nbsp&nbsp&nbsp";
    }
    for($n =0; $n<$i;$n++){
        echo"*";
    }

    echo"</br>";
}
for($r=10; $r>0; $r--){

    for($n =0;$n<$r;$n++){
      echo"*";
    }
    for($c=10; $c>$r;$c--){
        echo"&nbsp&nbsp&nbsp&nbsp";
    }
    for($z=0; $z<$r;$z++){
        echo"*";
    }
    echo"</br>";





}








?>