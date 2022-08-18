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

        $this->welcomeMessage();
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
    public function welcomeMessage()
    {
        echo '<div>';
        echo '<p>Vous venez de créer un Héro!</p>';
        echo '<p>Votre hero possède ' . $this->getHealth() . ' points de vie et ' . $this->getRage() . ' points de rage</p>';
        echo '<p>Votre arme ' . $this->getWeapon() . ' inflige ' . $this->getWeaponDamage() . ' dégats</p>';
        echo '<p>Votre armure ' . $this->getShield() . ' absorbe ' . $this->getShieldValue() . ' dégats</p>';
        echo '</div>';
    }
    public function attacked($value)
    {
        $degats = $value - $this->getShieldValue();
        $degats = ($degats > 0) ? $degats : 0;
        // $this->setShieldValue($this->getShieldValue() - 5);
        $this->setHealth($this->getHealth() - $degats);
        $this->addRage();
        echo '<hr><p>L\'orc attaque, votre hero prend ' . $value . ' points d\'attaque mais votre armure en absorbe ' . $this->getShieldValue() . '</p>';
        echo '<p>Votre hero a perdu ' . $degats . ' points de vie, il lui en reste ' . $this->getHealth() . ' et il a ' . $this->getRage() . ' points de rage</p>';
        // echo '<p>votre perds 5 points de vitalitée, il lui en reste ' . $this->getShieldValue() .'</p>';
    }
    public function addRage()
    {
        $rage = $this->getRage() + 30;
        $this->setRage($rage);
    }
}
