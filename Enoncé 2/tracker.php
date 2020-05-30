<?php 


    $array = [
        "name" => "Samir",
        "weightKg" => 70,
        "heightCmt" =>175
    ];

   
    $heightMetre = heightCmtmetre($array["heightCmt"]) ;
    $heightCarre = Carré( $heightMetre );
   
    function heightCmtmetre($hnb)
    {
        $hnbp = $hnb * 0.01;
        return $hnbp;
    }
    function Carré($nb)
    {
        $rep = $nb * $nb;
        return $rep;
    }
    
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .ss{
            color:green;
        }
    </style>
</head>
<body>
  
    <p>
          
            <?php   echo "Mr ".$array["name"]." le résultat de  l’indice de masse corporelle (IMC) est :
                <br> la hauteur en mètres: $heightMetre  <br> la hauteur en mètres au carré: $heightCarre<br>
                D'où l' IMC est: <strong class='ss'> ". $array["weightKg"]." / $heightCarre.</strong>
                ";
            ?>
    </p>
    
    
</body>
</html>





