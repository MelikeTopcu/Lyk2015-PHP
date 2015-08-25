<meta charset="UTF-8"/>
<?php

$toplamcarpim = 0;
/* array ile döndürme
function toplacarp($sayi1, $sayi2){
    $toplam = $sayi1 + $sayi2;
    $carpim = $sayi1 * $sayi2;
    $return = [$toplam, $carpim];
    return $return;
}
*/
function toplacarp($sayi1, $sayi2){
    $toplam = $sayi1 + $sayi2;
    $carpim = $sayi1 * $sayi2;
    $return = $toplam."-".$carpim;
    return $return;
}
$yenisonuc = explode("-",toplacarp(4,6));
print_r($yenisonuc);
?>