<?php

/**
 * this class has all the info about a single song.
 */
class song
{
    private $name = "N/A";
    private $artist = "N/A";
    private $price ="N/A";

    function __construct($csv)
    {
        if(htmlentities($csv)){
        $songInfo=explode(",",$csv);
            $this->$name  = $songInfo[0];
            $this->$artist =$songInfo[1];
            $this->$price = $songInfo[2];
        }
    }
    /*getters*/
    public function getName()
        {return $this->$name;}
    public function getArtist()
        {return $this->$artist;}
    public function getPrice()
        {return $this->$price;}

    /*setters*/
    public function setName($value)
        {$this->$name= htmlentities($value);}
    public function setArtist($value)
        {$this->$artist = htmlentities($value); }
    public function setPrice($value='')
        {$this->$price = htmlentities($value);}
}

 ?>
