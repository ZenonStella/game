<?php

class Orc extends Character {
    private $damage;

    public function __construct($health, $rage)
    {
        parent::__construct($health, $rage);
        // $this->setDamage($damage);


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
}