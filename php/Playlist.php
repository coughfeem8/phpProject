<?php

/**
 * stores a list of songList.
 */
class playlist
{
    private $playlistName="N/A";
    public $songList = array();
    function __construct($name ,$newList){
        $this->$playlistName = htmlentities($name);
        $this->$songList = htmlentities($newList);
    }
    public function getlistName()
        {return $this->$playlist;}
    public function setListName($newName)
        {$this->$playlistName = $newName;}
    public function addSong($newSong )
    {
        array_push($songList,$newSong);
    }
    public function removeSong($songId)
    {
        # code...
    }
}
 ?>
