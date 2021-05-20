<!DOCTYPE html>
<?php

include("../JogoDados/FuncaoURL.php");
 $f = new FuncaoURL();
 
 $dado1c = rand(1, 6);
 $dado2c = rand(1, 6);
 $dado1p = rand(1, 6);
 $dado2p = rand(1, 6);
 $url1 = $f->returnURLIMG($dado1p);
                 
 $valor1 = (int)$dado1c+(int)$dado2c;
 $valor2 = (int)$dado1p+(int)$dado2p;
 
 
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
              <img src= "<?php $url1 ?>" >
             
               <?php echo $dado1p; ?>
            </div>
           
            <div name="divcomputador" id="divcomputador">
                <?php echo $dado1c; ?>
            </div>
            
           
        </div>
    </body>
</html>