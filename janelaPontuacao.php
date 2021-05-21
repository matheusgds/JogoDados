<!DOCTYPE html>
<?php

function returnURLIMG($i) {
    switch ($i) {
        case 1:
            return "IMG/1.png";
            break;
        case 2:
            return "IMG/2.png";
            break;
        case 3:
            return "IMG/3.png";
            break;
        case 4:
            return "IMG/4.png";
            break;
        case 5:
            return "IMG/5.png";
            break;
        case 6:
            return "IMG/6.png";
            break;
        default :
            return "";
            break;
    }
}

$dado1c = rand(1, 6);
$dado2c = rand(1, 6);
$dado1p = rand(1, 6);
$dado2p = rand(1, 6);

$valor1 = (int) $dado1c + (int) $dado2c;
$valor2 = (int) $dado1p + (int) $dado2p;
?>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width-device-width,initial-scale=1.0"/>
        <title>Jogo Dos Dados</title>
        <link rel="stylesheet" type="text/css" href="css/estilo.css"/>
    </head>
    <body>
        <div name = "divprincipal2" id="divprincipal2">
            <div name="divjogador" id="divjogador">
                <h1> PESSOA </h1>
                <div>
                    <img src=<?php echo returnURLIMG($dado1p); ?> >

                    <img style="margin-left:10px"src=<?php echo returnURLIMG($dado2p); ?> >
                </div>
                <div>
                    <p> <?php echo $dado1p; ?></p>
                    <p><?php echo $dado2p; ?></p>
                </div>

            </div>

            <div name="divcomputador" id="divcomputador">
                <h1>COMPUTADOR</h1>>
                 <div>
                    <img src=<?php echo returnURLIMG($dado1c); ?> >

                    <img style="margin-left:10px"src=<?php echo returnURLIMG($dado2c); ?> >
                </div>
                <div>
                    <p> <?php echo $dado1c; ?></p>
                    <p><?php echo $dado2c; ?></p>
                </div>

            </div>


        </div>
    </body>
</html>