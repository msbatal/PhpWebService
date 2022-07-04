<?php
   //Http Get İle XML Web Servisini Kullanma
   $url = "http://localhost:8888/msbatal/web/web_xml.php";
   $xml = simplexml_load_file($url);
   $json = json_decode(json_encode($xml),true);
   $ogrenciler = $json["ogrenci"];
   foreach ($ogrenciler as $ogrenci) {
      foreach ($ogrenci as $anahtar => $deger) {
         echo "$anahtar: $deger<br>";
      }
      echo "<br><br>";
   }
?>