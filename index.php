<?php

    $imagem = "wallpaper-1210239.jpg";
    
    list($largura_original, $altura_original) = getimagesize($imagem);
    list($largura_mini, $altura_mini) = getimagesize("mini_imagem.jpeg");
    
    $imagem_final = imagecreatetruecolor($largura_original, $altura_original);
    
    $imagem_original = imagecreatefromjpeg("wallpaper-1210239.jpg");
    $imagem_mini = imagecreatefromjpeg("mini_imagem.jpeg");
    
    imagecopy($imagem_final, $imagem_original, 0, 0, 0, 0, 
        $largura_original, $altura_original);
    
    imagecopy($imagem_final, $imagem_mini, 100, 200, 0, 0, $largura_mini, $altura_mini);
    
    header("Content-Type: image/jpeg");
    imagejpeg($imagem_final, NULL);
?>