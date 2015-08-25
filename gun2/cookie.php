<meta charset="UTF-8"/>
<?php

/**
 * Created by PhpStorm.
 * User: melike
 * Date: 09.08.2015
 * Time: 19:26
 */
$user = "admin";
$pass = "12345";

if(isset($_GET["islem"])) {
    unset($_COOKIE["kullanici"]);
    setcookie("kullanici", "",time()-3600);
}

if(isset($_POST["ad"])){
    if(empty($_POST["ad"]) OR empty ($_POST["sifre"])){

        echo "kullanıcı adın veya sifren bos doldurda gel";
    }else {
        if($_POST["ad"]==$user && $_POST["sifre"]==$pass){
            setcookie("kullanici",$_POST["ad"]);

        }else{

            echo "sifre veya user yanlıs kardes";
        }
    }

}


if (isset($_COOKIE["kullanici"])) {
    echo "hosgeldiniz sayin" . $_COOKIE["kullanici"];
    echo ' <a href="?islem = cıkısyap">cıkıs yap</a>';
}
else
{
    echo '
    <form action ="" method="post">
    <input type="text" name="ad"/>
    <input type="password", name="sifre">
    <input type="submit" value="Gonder">
    <form/>

    ';
}



?>

