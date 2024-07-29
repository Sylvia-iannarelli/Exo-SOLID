<?php

// TODO refactoriser le code pour respecter le Principe de d'Invertion de Dépendence de la programmation SOLID


class Computer
{
    public function on() {}
}

class Button 
{
    /**
     * @var Computer
     */
    private $computer;

    public function activate()
    {
        if (condition) { //some condition
            $this->computer->on();
        }
    }
}