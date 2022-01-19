<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
    <h3>Definicion de arrays en PHP</h3>
    <?php
        //Array indexado
        $amigos=array("Antón","Rosalía","Xoán");
        echo "O terceiro amigo é: " . $amigos[2]."<br/>";

        //Array asociativo
        $dnisAmigos=array("Antón"=>"12345678x","Rosalía"=>"11112222x","Xoan"=>"99997777x");
        echo "O DNI de Rosalía é: " . $dnisAmigos['Rosalía']."<br/>";

        // Array de dúas dimensións:
        $cochesAmigos = array
            (
              "Antón"=>array  
            (
            "Fiat 500",
            "Audi A3",
            "Peugeot 208"
            ),
            "Rosalía"=>array
            (
            "Audi TT"
            ),
            "Xoán"=>array
            (
            "Jaguar XF",
            "BMW 520d",
            "Seat Ibiza"
            )
            );

        echo "O segundo coche de Xoan é " . $cochesAmigos['Xoán'][1] ."<br/>";

    ?>
    
</body>
</html>