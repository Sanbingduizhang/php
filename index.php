<?php
include __DIR__ . '/mysql.php';
$mysql = new mysql('test');
$res = $mysql->fetchOne();
echo '<pre>';
echo "\r\n";
var_dump($res);