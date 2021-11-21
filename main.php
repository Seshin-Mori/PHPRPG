<?php

//echo "処理開始\n\n";
//ファイルのロード
require_once('./classes/Human.php');
require_once('./classes/Enemy.php');
//インスタンス化
$cecil = new Human();
$goblin = new Enemy();

$cecil->name = "セシル";
$goblin->name = "ゴブリン";