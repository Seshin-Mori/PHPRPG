<?php
//クラス
class Enemy
{
    //プロパティ
    const MAX_HITPOINT = 50; //最大HP
    public $name;
    public $hitPoint = 50; //現在のHP
    public $attackPoint = 10; //攻撃力

    //メソッド
    public function doAttack($human)
    {
        echo "『" . $this->name . "』の攻撃！\n";
        echo "【" . $human->name . "】に" . $this->attackPoint . "のダメージ \n";
        $human->tookDamage($this->attackPoint);
    }

    public function tookDamage($damage)
    {
        $this->hitPoint -= $damage;
        //HPが0未満にならない
        if ($this->hitPoint < 0) {
            $this->hitPoint = 0;
        }

    }
}
