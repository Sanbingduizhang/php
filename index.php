<?php
include __DIR__ . '/mysql.php';
$mysql = new mysql('message');
$res = $mysql->fetchPage();
echo '<pre>';
var_dump($res);