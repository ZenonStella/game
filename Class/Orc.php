<?php

class Orc extends Character {
    private $damage;

    public function setDamage($value)
    {
        $this->_damage = $value;
    }
    public function getDamage()
    {
        return $this->_damage;
    }
}