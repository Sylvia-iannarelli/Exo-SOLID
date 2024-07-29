<?php

// TODO refactoriser le code pour respecter le Principe de Ségregation des Interface de la programmation SOLID

interface Vehicle 
{
	public function turnOn();
	public function run();
	public function fuel();
}

class Motorcycle implements Vehicle
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

class Bicycle implements Vehicle 
{
	public function turnOn() 
	{
		//does nothing, because bicycles doesn't turn on
	}
	
	public function run() 
	{
		echo 'Bicycle running...';
	}
	
	public function fuel() 
	{
	    //does nothing, because bicycles doesn't turn on
	}
}