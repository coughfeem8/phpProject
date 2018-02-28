
<?php
/**
 * stores all teh data about a user.
 */
class UserAcount
{
    private static $playListNum = 0;
    private $Username ="N/A";
    private $multiPlayList = array( );
    function __construct($name = 'playlist', $playlist = array())
    {

        array_merge($multiPlayList,$playlist);
    }

    public function setName()
    {
        # code...
    }
    public function getName()
    {
        return $this->$name;
    }

    public function CreatePlaylist($name,$Songs)
    {
        # code...
    }
    public function RemovePlaylist($listId)
    {
        # code...
    }
}
 ?>
