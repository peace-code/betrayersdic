<?php
  $lib_con = mysql_connect('mysql.yourhost.com', 'your_id', 'your_passwd');
  mysql_select_db('db_name', $lib_con);
  mysql_client_encoding($lib_con);
?>
