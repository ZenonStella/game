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
        $this->setHealth($this->getHealth() - $degats);
        $this->addRage();
        $newShield = $this->getShieldValue() - ceil($value * 0.1);
        $newShield = ($newShield < 0) ? 0 : $newShield;
        $this->setShieldValue($newShield);
        echo '<hr><p>L\'orc attaque, votre hero prend ' . $value . ' points d\'attaque mais votre armure en absorbe ' . $this->getShieldValue() . '</p>';
        echo '<p>Votre hero a perdu ' . $degats . ' points de vie, il lui en reste ' . $this->getHealth() . ' et il a ' . $this->getRage() . ' points de rage</p>';
        if ($newShield == 0) {
            echo '<p>Votre armure est cassée !</p>';
        } else {
            echo '<p>La durabilité de votre armure baisse à ' . $newShield . '</p>';
        }
    }
    public function addRage()
    {
        $rage = $this->getRage() + 30;
        $this->setRage($rage);
    }
}
