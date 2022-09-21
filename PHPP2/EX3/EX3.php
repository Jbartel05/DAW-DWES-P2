<?php
$Paises = array('Pais'=>'España','Codigo'=>'alfa-3 ESP','Numero'=>'724');
        array('Pais'=>'Francia','Codigo'=>'alfa-3 FRA','Numero'=>'250');
        array('Pais'=>'Alemania','Codigo'=>'alfa-3 DEU','Numero'=>'276');
        array('Pais'=>'Belgica','Codigo'=>'alfa-3 BEL','Numero'=>'056');
        array('Pais'=>'Portugal','Codigo'=>'alfa-3 POR','Numero'=>'620');
        array('Pais'=>'Bulgaria','Codigo'=>'alfa-3 BGR','Numero'=>'100');
        array('Pais'=>'Albania','Codigo'=>'alfa-3 ALB','Numero'=>'008');
        array('Pais'=>'Armenia','Codigo'=>'alfa-3 ARM','Numero'=>'051');
        array('Pais'=>'Australia','Codigo'=>'alfa-3 AUS','Numero'=>'036');


?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>EX3</title>
</head>
<body>
<h1>Paises</h1>
<ul>
<?php
foreach($Paises as $Pais) {
    echo '<li>'.'El Pais ' . $Paises['Pais'] . ' utiliza el codigo ' . $Paises['Codigo'] . ' con codigo numerico ' . $Paises['Numero'].'</li>';
}
?>
</ul>
</body>
</html>
