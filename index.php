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
    
    $imagem_final = imagecreatetruecolor($largura, $altura);
    $imagem_original = imagecreatefromjpeg($arquivo);
    
    imagecopyresampled($imagem_final, $imagem_original, 
        0, 0, 0, 0 , $largura, $altura, $largura_original, $altura_original);
    
    imagejpeg($imagem_final, "mini_imagem.jpeg", 100);
    
    echo "Imagem redimencionada com sucesso!"
    
?>