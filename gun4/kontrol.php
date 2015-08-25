<meta charset="UTF-8" />
<?php

require("veriler.php");

echo "senin adın " . $_POST["ad"] . "<br />";
echo "senin soyadın " . $_POST["soyad"] . "<br />";
echo "senin doğum tarihin " . $_POST["dogumtarih"] . "<br />";
echo "senin cinsiyetin " . $_POST["cinsiyet"] . "<br />";
echo "senin üniversiten  " . $uniler[$_POST["okul"]] . "<br />";
echo "senin hobilerin : <br />";
foreach($_POST["hobi"] AS $hobi){
    echo $hobiler[$hobi]. "<br />";
}