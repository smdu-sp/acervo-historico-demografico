<?php
$hostname_atlas = "";
$database_atlas = "";
$username_atlas = "";
$password_atlas = "";
$avalia_atlas = mysql_pconnect($hostname_atlas, $username_atlas, $password_atlas) or trigger_error(mysql_error(),E_USER_ERROR);

mysql_select_db($database_atlas, $avalia_atlas);

?>
