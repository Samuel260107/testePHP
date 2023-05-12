<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
</head>
<body>
    <?php
    $dia = 27;
    $mes = 1;

    switch($mes){
        case 1:
        case 2:
        case 3:
            if($mes == 3 and $dia >= 20){
                echo "<p>Outono<p>";
                echo "<img src='imgoutono.jpg'>";
            }else{
                echo "<p>Verão</p>";
                echo "<img src='imgverão.jpg'>";
            }
            break;
        case 4:
        case 5:
        case 6:
            if($mes == 6 and $dia >= 21){
                echo "<p>Inverno</p>";
                echo "<img src='imginverno.jpg'>";
            }else{
                echo "<p>Outono</p>";
                echo "<img src='imgoutono.jpg'>";
            }
            break;
        case 7:
        case 8:
        case 9:
            if($mes == 9 and $dia >= 23){
                echo "<p>Primaveira</p>";
                echo "<img src='imgprimavera.jpg'>";
            }else{
                echo "<p>Inverno</p>";
                echo "<img src='imginverno.jpg'>";
                
            }
            break;
        case 10:
        case 11:
        case 12:
            if($mes == 12 and $dia >= 22){
                echo "<p>Verão</p>";
            }else{
                echo "<p>Primaveira</p>";
            }
            break;
        }
    ?>
    
</body>
</html>