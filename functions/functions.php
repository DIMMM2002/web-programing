<?php
define(DB_host, 'localhost');
define(DB_user, 'shop_user');
define(DB_password, '12345');
define(DB_name, "shop");

$mysql = new mysqli(DB_host, DB_user, DB_password, DB_name);
if ($mysql->connect_error) exit("gg");
$mysql->set_charset('utf8');
$mysql->close();
?>