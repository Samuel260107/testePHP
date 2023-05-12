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
    $dia = 19;
    $mes = 3;

    switch($mes){
        case 1:
        case 2:
        case 3:
            if($mes == 3 and $dia >= 20){
                echo "<p>Outono<p>";
            }else{
                echo "<p>Verão</p>";
            }
    }
        case 4:
        case 5




    ?>
    
</body>
</html>