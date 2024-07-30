<?php

// TODO refactoriser le code pour respecter le Principe de d'Invertion de Dépendence de la programmation SOLID

interface ComputerInterface {
    public function on();
}

class Computer implements ComputerInterface
{
    public function on() {}
}

class Button 
{
    private $computerInterface;
    public function __construct(ComputerInterface $computerInterface) {
        $this->computerInterface = $computerInterface;
    }

    public function activate()
    {
        if (condition) { //some condition
            $this->computerInterface->on();
        }
    }
}