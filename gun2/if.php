<meta charset="UTF-8"/>
<?php

/*
eşitmidir : ==
eşit değilmidir : !=
büyüktür : >
küçüktür : <
*/
$sayi1 = 0;
$sayi2 = 11;
$sayi3 = 0;
// echo $sayi1>$sayi2 ? 'buyuk olan sayi 1' : 'büyük olan sayı 2';
if (($sayi1 > $sayi2) && ($sayi1 > $sayi3)) {
    $sonuc = "sayı 1";
} elseif ($sayi2 > $sayi3) {
    $sonuc = "sayı 2";
} elseif ($sayi3 > $sayi2) {
    $sonuc = "sayı 3";
}else{
    $sonuc = "bu işte terslik var";
}
echo $sonuc;
/*
$birincisifre = "123456";
$ikincisifre = "123456";
if($birincisifre != $ikincisifre){
    echo "<b style='color:green;'>şifre doğru</b>";
}else{
    echo "şife yanlış";
}
*/
/*
if($sayi1 > $sayi2){
$tmp = $sayi1;
else
$temp = $sayi2;
if($tmp< sayi3)
$tmp=$sayi3;

echo $tmp;
}
*/


?>