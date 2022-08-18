<?php

class Character {
    private $_health;
    private $_rage;

    public function setHealth($health)
    {
       $this->_health = $health;
    }
    public function getHealth()
    {
       return $this->_health;
    }
    public function setRage($rage)
    {
        $this->_rage = $rage;
    }
    public function getRage()
    {
        return $this->_rage;
    }
}
