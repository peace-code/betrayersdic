<?php
  $q = "http://map.search.daum.net/mapsearch/map.daum?q="
  //. urlencode("abc")
  . $_GET['q']  
  . "&msFlag=A&sort=0";
  $ch = curl_init($q);
  curl_setopt($ch, CURLOPT_REFERER, "http://map.daum.net/");
  echo "[";
  $ret = curl_exec($ch);
  echo "]";
  curl_close($ch);
?>
