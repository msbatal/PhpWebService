<?php
   //Curl İle Json Web Servisini Kullanma (Post)
   $token = sha1(md5("mehmetx"));
   $veriler = array("token" => $token, "id" => "2");

   $curl = curl_init();
   curl_setopt($curl, CURLOPT_URL, "http://localhost:8888/msbatal/web/web_curl.php");
   curl_setopt($curl, CURLOPT_POST, 1);
   curl_setopt($curl, CURLOPT_POSTFIELDS, http_build_query($veriler));
   curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
   $cevap = curl_exec($curl);
   curl_close($curl);

   $json = json_decode($cevap, true);

   foreach ($json as $ogrenciler) {
      foreach ($ogrenciler as $anahtar => $deger) {
         echo "$anahtar: $deger<br>";
      }
      echo "<br><br>";
   }
?>