<meta charset="UTF-8"/>
<?php
$a = "z";
echo $a;
echo ++$a;
echo "<br />";

$bilgiler = array(
    array("ad" => array("mehmet", "uğur"),
        "soyad" => "arıcı",
        "yas" => 22)
);
echo "<br />";
echo count($bilgiler);
echo "<hr />";

$encode = json_encode($bilgiler);
print_r($bilgiler);
echo "<hr />";
echo $encode;
echo "<hr />";
print_r(json_decode($encode, true));
/*
echo $bilgiler[1]["ad"];
echo "<pre>";
var_dump($bilgiler);
echo "</pre>";
*/
?>


