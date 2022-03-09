<?php
function getCircolari() {
    $FILE_NAME = '../modules/circolari.txt';
    $file_circolari = fopen($FILE_NAME, "r") or die("Unable to open file!");
    $circolari = fread($file_circolari,filesize($FILE_NAME));
    fclose($file_circolari);
    
    $CATEGORIES_KEY = 2;
    $new_circolari = array();
    $circolari = explode(";\n", $circolari);
    array_pop($circolari);

    foreach ($circolari as $key => $circolare) {
        $array_circolare = explode(",", $circolare);
        $array_circolare[$CATEGORIES_KEY] = explode("-", $array_circolare[$CATEGORIES_KEY]);
        $new_circolari[$key] = $array_circolare;
    }
    return $new_circolari;
}
?>