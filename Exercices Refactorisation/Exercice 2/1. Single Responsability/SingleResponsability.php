<?php

namespace SRPViolation;

interface CanDial {
    public function dial($pno);
}

interface CanHangup {
    public function hangup();
}

interface CanSend {
    public function send($c);
}

interface CanReceive {
    public function receive();
}

class DataChannel implements CanSend, CanReceive
{
    public function send($c)
    {
        // Implementing send($c) method.
    }

    public function receive()
    {
        // Implementing receive() method.
    }
}

class Connexion implements CanDial, CanHangup
{
    public function dial($pno)
    {
        // Implementing dial($pno) method.
    }

    public function hangup()
    {
        //  Implementing hangup() method.
    }
}