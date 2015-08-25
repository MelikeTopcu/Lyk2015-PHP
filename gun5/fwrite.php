<meta charset="UTF-8" />
<?php

$isimler = [
    "ahmet",
    "mermet",
    "ali",
    "veli",
    "ömer"
];
$json = json_encode($isimler);
$dosya = "melike.txt";
// dosya varsa aç
if(file_exists($dosya)){
    // işlemler
    echo "dosya var. silmek için tıklayın";
}else{
    // yoksa oluştur
    touch($dosya);
    $open = fopen($dosya, "w");
    fwrite($open, $json);
    fclose($open);
    echo "<br />";
    echo "<a href='fread.php'>dosyayı oku</a>";
}