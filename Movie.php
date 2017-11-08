<?php

class Movie
{
    private $title= '';
    private $lenght = '';
    private $type = '';
    private $description = '';
    private $year = '';
    
    public function __construct($title = " ")
    {
        $this->title = $title;
    }
    
    function getTitle ()
    {
        return $this->title;        
    }
            
    function setTitle ($title = "")
    {
        $this->title = $title;        
    }
            
    function getType ()
    {
        return $this->type;        
    }
            
    function setType ($type = "")
    {
        $this->type = $type;        
    }
    
    function getLenght ()
    {
        return $this->lenght;        
    }
            
    function setLenght ($lenght= "")
    {
        $this->lenght = $lenght;        
    }
    
    function getDescription ()
    {
        return $this->description;        
    }
            
    function setDescription ($description = "")
    {
        $this->description = $description;        
    }
    
    function getYear ()
    {
        return $this->year;        
    }
            
    function setYear ($year = "")
    {
        $this->year = $year;        
    }    
        
        function toString()
    {
        print 'titre = '.$this->title .
        'Durée =' .$this->lenght .
        'Genre =' .$this->type . 
        'Description =' .$this->description .
        'Date de sortie = ' .$this->year;
    }

}

$movie = new Movie("Mon Film");
echo $movie->getTitle();
$movie->setTitle("Ali G ");
$movie->setLenght("95");
$movie->setType("Drolissime");
$movie->setDescription("C'est un dictateur arabe qui se fait baiser avant de baiser une juive");
$movie->setYear("A l'ancienne");
echo $movie->toString();
