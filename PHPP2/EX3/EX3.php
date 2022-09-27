<?php
$Paises = [
        "ESP" => ['Pais'=>'España','"Codigo'=>'alfa-3 ESP','Numero'=>'724'],
        "FRA" => ['Pais'=>'Francia','Codigo'=>'alfa-3 FRA','Numero'=>'250'],
        "DEU" => ['Pais'=>'Alemania','Codigo'=>'alfa-3 DEU','Numero'=>'276'],
        "BEL" => ['Pais'=>'Belgica','Codigo'=>'alfa-3 BEL','Numero'=>'056'],
        "POR" => ['Pais'=>'Portugal','Codigo'=>'alfa-3 POR','Numero'=>'620'],
        "BGR" => ['Pais'=>'Bulgaria','Codigo'=>'alfa-3 BGR','Numero'=>'100'],
        "ALB" => ['Pais'=>'Albania','Codigo'=>'alfa-3 ALB','Numero'=>'008'],
        "ARM" => ['Pais'=>'Armenia','Codigo'=>'alfa-3 ARM','Numero'=>'051'],
        "AUS" => ['Pais'=>'Australia','Codigo'=>'alfa-3 AUS','Numero'=>'036']
];


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
foreach($Paises as $Codigo => ["Pais"=>$pais,"Numero"=>$numero]) {
    echo 'El Pais ' . $pais . ' utiliza el codigo alfa 3 ' . $Codigo . ' con codigo numerico ' . $numero;
    echo "<br>";
}
?>
</ul>
</body>
</html>
