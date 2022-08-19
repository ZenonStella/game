<?php

class Orc extends Character
{
    private $_damage;
    private $_weaponDurabilite;
    private $_shield;

    public function __construct($health, $rage, $shield, $weapon)
    {
        parent::__construct($health, $rage);
        $this->setDamageShield($shield);
        $this->setWeaponDurabilite($weapon);


        $this->welcomeMessage();
    }

    public function setDamage($value)
    {
        $this->_damage = $value;
    }
    public function getDamage()
    {
        return $this->_damage;
    }
    public function setWeaponDurabilite($value)
    {
        $this->_weaponDurabilite = $value;
    }
    public function getWeaponDurabilite()
    {
        return $this->_weaponDurabilite;
    }
    public function setDamageShield($value)
    {
        $this->_shield = $value;
    }
    public function getDamageShield()
    {
        return $this->_shield;
    }

    public function welcomeMessage()
    {
        echo '<div>';
        echo '<p>Vous venez de créer un orc!</p>';
        echo '<p>Votre orc possède ' . $this->getHealth() . ' points de vie et ' . $this->getRage() . ' points de rage</p>';
        // echo '<p>Votre orc inflige ' . $this->getDamage() . ' dégats</p>';
        echo '</div>';
    }
    public function attack()
    {
        $this->setDamage(rand(600, 800));
        return $this->getDamage();
    }
    public function attacked($value)
    {
        $degats = $value - $this->getDamageShield();
        $degats = ($degats > 0) ? $degats : 0;
        $this->setHealth($this->getHealth() - $degats);
        $this->setWeaponDurabilite($this->damageToWeapon($this->getDamage()));
        echo '<p>Le hero attaque, votre orc prend ' . $value . ' points d\'attaque mais votre armure en absorbe ' . $this->getDamageShield() . '</p>';
        if ($this->getHealth() <= 0) {
            echo '<p>Votre orc est mort, le hero est sort victorieux de cet affrontement</p>';
        } else {
            echo '<p>Votre orc a perdu ' . $degats . ' points de vie, il lui en reste ' . $this->getHealth() . '</p>';
            }
        $this->damageToShield($value);
    }
    public function damageToShield($value)
    {
        $newShield = $this->getDamageShield() - ceil($value * 0.1);
        $newShield = ($newShield < 0) ? 0 : $newShield;
        $this->setDamageShield($newShield);
        if ($newShield == 0) {
            echo '<p>L\'armure de l\'orc est cassée ! Elle n\encaisse plus de dégats</p>';
        } else {
            echo '<p>La durabilité de l\'armure de l\'orc baisse à ' . $newShield . '</p>';
        }
    }
    public function damageToWeapon($value)
    {
        $newWeapon = $this->getWeaponDurabilite() - ceil($value * 0.1);
        $newWeapon = ($newWeapon < 0) ? 0 : $newWeapon;
        $this->setWeaponDurabilite($newWeapon);
        if ($newWeapon == 0) {
            echo '<p>L\'arme de l\'orc est cassée !</p>';
        } else {
            echo '<p>La durabilité de l\'arme de l\'orc baisse à ' . $newWeapon . '</p>';
        }
    }
}
