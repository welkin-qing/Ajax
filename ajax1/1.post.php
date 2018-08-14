<?php
header('content-type:text/html;charset="utf-8"');
error_reporting(0);

$username = $_REQUEST['username'];
$age = $_REQUEST['age'];

echo "你的名字：{$username}，年龄：{$age}";