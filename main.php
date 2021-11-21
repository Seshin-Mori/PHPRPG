<?php

//echo "処理開始\n\n";
//ファイルのロード
require_once './classes/Human.php';
require_once './classes/Enemy.php';
require_once './classes/Brave.php';
//インスタンス化
//$cecil = new Human();
$cecil = new Brave();
$goblin = new Enemy();

$cecil->name = "セシル";
$goblin->name = "ゴブリン";

$turn = 1;

while ($cecil->hitPoint > 0 && $goblin->hitPoint > 0) {
    echo "*** $turn ターン目 ***\n\n";
//現在のHP
    //::オブジェクト定数
    echo $cecil->name . " : " . $cecil->hitPoint . "/" . $cecil::MAX_HITPOINT . "\n";
    echo $goblin->name . " : " . $goblin->hitPoint . "/" . $goblin::MAX_HITPOINT . "\n";
    echo "\n";

    $cecil->doAttack($goblin);
    echo "\n";
    $goblin->doAttack($cecil);
    echo "\n";

    $turn++;
}
//終了後
echo "戦闘終了\n";
echo $cecil->name . " : " . $cecil->hitPoint . "/" . $cecil::MAX_HITPOINT . "\n";
echo $goblin->name . " : " . $goblin->hitPoint . "/" . $goblin::MAX_HITPOINT . "\n";
