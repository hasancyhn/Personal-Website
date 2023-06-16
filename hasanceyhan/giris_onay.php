<?php
session_start();
require("connection.php");
$kullanici_adi = $_POST["kullanici_adi"];
$parola = $_POST["parola"];
if ($kullanici_adi != "" && $parola != "") {
    $sorgu = $db->prepare("SELECT * FROM KULLANICILAR WHERE KULLANICI_ADI=:ad");
    $sorgu->bindParam(":ad", $kullanici_adi);
    $sorgu->execute();
    $kullanici = $sorgu->fetch(PDO::FETCH_ASSOC);
    if (count($kullanici) > 0) {
        if ($kullanici["PAROLA"] == $parola && $kullanici["KULLANICI_ADI"] == $kullanici_adi) {
            $_SESSION["ADMIN"] = 1;
            $_SESSION["KULLANICI"] = $kullanici["KULLANICI_ADI"];
            $_SESSION["AD_SOYAD"] = $kullanici["AD_SOYAD"];
        }
    }
}

header("Location:makaleler.php");
