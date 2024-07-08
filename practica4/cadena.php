<?php
function calcula_extension($nombre_fichero) {
    $posicion_punto = strrpos($nombre_fichero, '.'); 
    $extension = substr($nombre_fichero, $posicion_punto + 1);
    
    $extension = strtoupper($extension);
    
    return $extension;
}

function tipo_fichero($extension) {
    $tipos = [
        "PDF" => "Documento Adobe PDF",
        "TXT" => "Documento de texto",
        "HTML" => "Documento HTML",
        "HTM" => "Documento HTML",
        "PPT" => "Presentación Microsoft Powerpoint",
        "DOC" => "Documento Microsoft Word",
        "GIF" => "Imagen GIF",
        "JPG" => "Imagen JPG",
        "ZIP" => "Archivo comprimido ZIP"
    ];
    if (array_key_exists($extension, $tipos)) {
        return $tipos[$extension];
    } else {
        return "Archivo " . $extension;
    }
}
?>