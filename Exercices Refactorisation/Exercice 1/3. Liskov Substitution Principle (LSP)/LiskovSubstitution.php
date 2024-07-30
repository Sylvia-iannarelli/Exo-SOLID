<?php

// TODO refactoriser le code pour respecter le principe LSP de la programmation SOLID


class Rectangle 
{
    protected $height;
    protected $width; 
    
    public function setWidth($width)
    {
        $this->width = $width;
    }
    
    public function setHeight($height)
    {
        $this->height = $height;
    }
    
    public function getWidth()
    {
        return $this->width;
    }
    
    public function getHeight()
    {
        return $this->height;
    }
    
    public function calculateArea()
    {
        return $this->height * $this->width;
    }
}

class Square extends Rectangle {
    
}

class GraphicEditor
{
    public function resize(Rectangle $rectangle)
    {
        $rectangle->setHeight($rectangle->getHeight() * 2);
        $rectangle->setWidth($rectangle->getWidth() * 4);
    }
}