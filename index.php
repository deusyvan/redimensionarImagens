<?php

    $imagem = "wallpaper-1210239.jpg";
    
    list($largura_original, $altura_original) = getimagesize($imagem);
    
    $imagem_final = imagecreatetruecolor($largura_original, $altura_original);
    
    $imagem_original = imagecreatefromjpeg("wallpaper-1210239.jpg");
    $imagem_mini = imagecreatefromjpeg("mini_imagem.jpeg");
    
    
?>