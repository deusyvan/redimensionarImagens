<?php

    $arquivo = "wallpaper-1210239.jpg";
    
    $largura = 200;
    $altura = 200;
    
    list($largura_original, $altura_original) = getimagesize($arquivo);
    
    $ratio = $largura_original / $altura_original;
    
    echo $ratio;