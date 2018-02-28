
<?php
/**
 * stores all the data about a user.
 */
class UserAcount
{
    private static $playListNum = 0;
    private $userName ="N/A";
    private $multiPlayList = array();

    function __construct($name, $playlist = array()){
      $this->$userName = htmlentities($newName);
      $this->$multiPlayList = array_merge($this->$multiPlayList,$playlist);
    }

    public function setName($newName)  {
  }
    public function getName()  {    return $this->$name;  }

    public function CreatePlaylist($name,$Songs)
    {
      foreach ($Songs as $song) {
        # code...
      }
    }
    public function RemovePlaylist($listId)
    {
        # code...
    }
}
 ?>
