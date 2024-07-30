<?php

// TODO refactoriser le code pour respecter le Principe de Ségregation des Interface de la programmation SOLID

interface CanTurnOn 
{
	public function turnOn();
	public function fuel();
}

interface CanRun 
{
	public function run();
}

class Motorcycle implements CanTurnOn, CanRun
{
    public function turnOn()
    {
        echo 'Motorcycle Turning on...';
    }

    public function run()
    {
        echo 'Motorcycle running...';
    }

    public function fuel()
    {
        echo 'Fuel the Motorcycle';
    }
}

class Bicycle implements CanRun 
{
	public function run() 
	{
		echo 'Bicycle running...';
	}
}