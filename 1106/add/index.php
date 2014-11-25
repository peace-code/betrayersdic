<?php
/**
 * 2013. 1. 27 created
 * 2013. 2. 20 utf8 인코딩으로 설정함.
 */
require_once "../a.php";

$liblat = mysql_real_escape_string($_GET['lat']);
$liblng = mysql_real_escape_string($_GET['lng']);
$libname = mysql_real_escape_string($_GET['name']);

if (!$lib_con) {
  die('Colud not connect: ' . mysql_error());
}

//mysql_select_db("thepath", $lib_con);

mysql_client_encoding($lib_con);
if (!mysql_query("insert into lib_list (libname, lat, lng) values ('".$libname."', '".$liblat."', '".$liblng."')", $lib_con)) {
  die('Error: ' . mysql_error());
}

mysql_close($lib_con);
echo "success";
?>
