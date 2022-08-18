<?php

class Hero extends Character
{
    private $_weapon;
    private $_weaponDamage;
    private $_shield;
    private $_shieldValue;

    public function __construct($health, $rage, $weapon, $weaponDamage, $shield, $shieldValue)
    {
        parent::__construct($health, $rage);
        $this->setWeapon($weapon);
        $this->setWeaponDamage($weaponDamage);
        $this->setShield($shield);
        $this->setShieldValue($shieldValue);

        echo '<p>Vous venez de créer un Héro!</p>';
        echo '<p>Votre hero possède ' . $this->getHealth() . ' points de vie et ' . $this->getRage() . ' points de rage</p>';
        echo '<p>Votre arme ' . $this->getWeapon() . ' inflige ' . $this->getWeaponDamage() . ' dégats</p>';
        echo '<p>Votre armure ' . $this->getShield() . ' absorbe ' . $this->getShieldValue() . ' dégats</p>';
    }

    public function setWeapon($value)
    {
        $this->_weapon = $value;
    }
    public function getWeapon()
    {
        return $this->_weapon;
    }
    public function setWeaponDamage($value)
    {
        $this->_weaponDamage = $value;
    }
    public function getWeaponDamage()
    {
        return $this->_weaponDamage;
    }
    public function setShield($value)
    {
        $this->_shield = $value;
    }
    public function getShield()
    {
        return $this->_shield;
    }
    public function setShieldValue($value)
    {
        $this->_shieldValue = $value;
    }
    public function getShieldValue()
    {
        return $this->_shieldValue;
    }
}
