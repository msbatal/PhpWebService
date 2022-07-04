<?php
    //XML İle Web Servis Yapımı (Get)
    require_once("baglan.php");

    $ogrenciler = array();
    $sorgu = $baglan->query("select * from ogrenci", PDO::FETCH_ASSOC);

    if ($sorgu->rowCount() > 0) {
        foreach ($sorgu as $satir) {
            $ogrenciler[] = array("adsoyad" => $satir["adsoyad"], "tckimlik" => $satir["tckimlik"], "adres" => $satir["adres"]);
        }
    }

    header("Content-Type: application/xml; charset=utf-8");
    echo "<?xml version='1.0' encoding='utf-8' ?>";
    echo "<ogrenciler>";
    foreach ($ogrenciler as $ogrenci) {
        echo "<ogrenci>";
        foreach ($ogrenci as $anahtar => $deger) {
            echo "<$anahtar>$deger</$anahtar>";
        }
        echo "</ogrenci>";
    }
    echo "</ogrenciler>";

?>