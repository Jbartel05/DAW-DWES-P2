<?php
$alumnes = array('Joel','Alex','Adrian','Guillem','Pol','Ricard','Raul');
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>EX2</title>

<body>
<h1>Alumnes</h1>
    <ul>
        <?php
        foreach($alumnes as $alumne){
            echo '<li>' . $alumne . '</li>';
        }
        ?>


    </ul>

</body>
</head>
<?php
  echo 'En total hay: '.count($alumnes) .' alumnes';
?>

</html>