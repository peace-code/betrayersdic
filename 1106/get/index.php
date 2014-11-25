<?php
/**
 * 2013.1.27 created
 */
require_once "../a.php";

if (!$lib_con) {
  die('Colud not connect: ' . mysql_error());
}

//mysql_select_db("thepath", $lib_con);

$list = array();

$r = mysql_query("select * from lib_list", $lib_con);
if ($r) {
  while ($rec = mysql_fetch_array($r, MYSQL_ASSOC)) {
    $list[] = $rec;
  }
} else {
  die('Error: ' . mysql_error());
}

mysql_close($lib_con);
//echo "success"."\n";
echo json_encode($list);
?>
