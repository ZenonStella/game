<?php

class Hero extends Character
{
    private $_weapon;
    private $_weaponDamage;
    private $_shield;
    private $_shieldValue;

    public function setWeapon($weapon)
    {
        $this->_weapon = $weapon;
    }
    public function getWeapon()
    {
        return $this->_weapon;
    }
    public function setWeaponDamage($weaponDamage)
    {
        $this->_weaponDamage = $weaponDamage;
    }
    public function getWeaponDamage()
    {
        return $this->_weaponDamage;
    }
    public function setShield($shield)
    {
        $this->_shield = $shield;
    }
    public function getShield()
    {
        return $this->_shield;
    }
    public function setShieldValue($shieldValue)
    {
        $this->_shieldValue = $shieldValue;
    }
    public function getShieldValue()
    {
        return $this->_shieldValue;
    }
}
