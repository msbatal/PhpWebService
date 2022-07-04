<?php
    //Json İle Web Servis Yapımı (Get)
    require_once("baglan.php");

    $ogrenciler = array();
    $sorgu = $baglan->query("select * from ogrenci", PDO::FETCH_ASSOC);

    if ($sorgu->rowCount() > 0) {
        foreach ($sorgu as $satir) {
            $ogrenciler[] = array("adsoyad" => $satir["adsoyad"], "tckimlik" => $satir["tckimlik"], "adres" => $satir["adres"]);
        }
    }

    header ("Content-Type: application/json; charset=utf-8");
    $json = json_encode($ogrenciler, JSON_UNESCAPED_UNICODE);
    echo $json;

?>