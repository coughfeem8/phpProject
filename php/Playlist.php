<?php
/**
 * stores a list of songs.
 */
class playlist
{
    private $playlistName="N/A";
    public $songList = array();
    private static $songId = 0;

    function __construct($name ,$newList){
        $this->$playlistName = htmlentities($name);
        $this->$songList = htmlentities($newList);

    }
    public function getlistName()
        {return $this->$playlist;}
    public function setListName($newName)
        {$this->$playlistName = $newName;}

    public function addSong($newSong ){
        array_push($songList,$newSong);
        $songList =sort($songList);
        $songId++;
      }
    public function removeSong($Songname){
    }
    public function __get($value='')
    {
      # code...
    }
}
 ?>
