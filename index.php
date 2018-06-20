<?php

    $arquivo = "wallpaper-1210239.jpg";
    
    $largura = 200;
    $altura = 200;
    
    list($largura_original, $altura_original) = getimagesize($arquivo);
    
    $ratio = $largura_original / $altura_original;
    
    if($largura/$altura > $ratio){
        $largura = $altura * $ratio;
    } else {
        $altura = $largura / $ratio;
    }
    
    echo "L ORIGINAL: ".$largura_original." - A ORIGINAL: ".$altura_original."<br/>";
    echo "LARGURA: ".$largura." - ALTURA: ".$altura;