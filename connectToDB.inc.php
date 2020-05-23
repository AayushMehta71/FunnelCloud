<?php
    $db_servername = "thefunnelcloud.com";
     $db_username = "thefu710_sang";
     $db_password = "acton";
     $db_databasename = "thefu710_backend";
    $db = mysql_connect($db_servername,$db_username,$db_password);
if (!$db) {
  die('Could not connect to database: ' . mysql_error());
} else {
mysql_select_db($db_databasename,$db);
}
?> 