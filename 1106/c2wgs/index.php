<?php
  $q = "http://apis.daum.net/local/geo/transcoord?apikey=DAUM_LOCAL_DEMO_APIKEY&x="
  //. "500800"
  . $_GET['x']  
  ."&y="
  //. "1112471"
  . $_GET['y']
  ."&fromCoord=wcongnamul&toCoord=WGS84";
  $ch = curl_init($q);
  echo "[";
  $ret = curl_exec($ch);
  echo "]";
  curl_close($ch);
?>
