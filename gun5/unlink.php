<meta charset="UTF-8"/>
<?php

$dosya = "melike.txt";
if (file_exists($dosya)) {
    // dosyayı sil
    $sil = unlink($dosya);
    if ($sil) {
        // eğer silindiyse bu işlemleri yap
        echo "kangırcıleyşıns";
        echo "<br />";
        echo "<a href='fwrite.php'>dosyayı oluştur</a>";
    } else {
        echo "erör silinemedi!!";
    }
} else {
    echo "zaten dosya yok.";
    echo "<br />";
    echo "<a href='fwrite.php'>dosyayı oluştur</a>";
}
