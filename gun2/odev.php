<?php
/**
 * Created by PhpStorm.
 * User: melike
 * Date: 09.08.2015
 * Time: 22:47
 */
// cookie var mı yok mu? yoksa olusturuyor
if(isset($_COOKIE["knm"])) {
        setcookie("knm", 5);
    }

$knm=$_COOKIE["knm"];

// ne tıklanmışsa ona gore hareket ettirme
if(isset($_GET["islem"])){
        if($_GET["islem"]=="yukari"){
            if($knm==0) {
                setcookie("knm", 4);
            }else setcookie("knm",$knm-1);
        }

    }
if(isset($_GET["islem"])) {
    if ($_GET["islem"] == "asagi") {
        if ($knm == 4) {
            setcookie("knm", 0);
        } else setcookie("knm", $knm + 1);
    }
}

echo "<a href='?islem=yukari'> yukari></a>";
echo "<table border='1'>";


for($i=0; $i<5;$i++){
    echo "<tr>";

          if($i==$knm){ echo "<td width='50px' height='50px'>X</td>"; } else{ echo "<td width='50px' height='50px'> </td>"; }

    echo "</tr>";
}


echo "</table>";
echo "<a href='?islem=asagi'> asagi></a>";

?>
