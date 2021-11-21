<?php

class Human
{
//プロパティ
    const MAX_HITPOINT = 100; //最大HP
    public $name; //名前
    public $hitPoint; //HP
    public $attackPoint; //攻撃力

//メソッド
    public function doAttack($enemy)
    {
        echo "『" . $this->name . "』の攻撃！\n";
        echo "【" . $this->name . "】に" . $this->attackPoint . "のダメージ \n";
        $enemy->tookDamage($this->attackPoint);
    }

    public function tookDamege($damage)
    {
        $this->hitpoint -= $damage;
        if ($this->hitPoint < 0) {
            $this->hitPoint = 0;
        }
    }
}
