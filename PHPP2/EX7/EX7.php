



<table border = 5 width=350px cellpadding="2px" cellspacing="0px">

    <?php

for ($f=1; $f <=9 ; $f++) {


    echo "<tr>";

    for ($c=1; $c <=9 ; $c++) {


        $suma = $f + $c;
        if ($suma % 2 == 0) {
            echo "<td height =30px width= 30px bgcolor='black' ></td>";


        } else {
            echo "<td height =30px width= 30px bgcolor='white' ></td>";
        }
    }
    echo "</tr>";
}
?>
</table>
