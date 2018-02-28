<?php
/**
 * this class has the info about a single song.
 */
class Song
{
     public $songInfo = array("name" =>'' ,"artist"=>'',"price"=>'');

    public function __construct($csv = "")
    {
        $csv =htmlentities($csv);
        $csv = explode("|",$csv);

    $this->$songInfo["name"] =  $csv[0];
    $this->$songInfo["artist"] = $csv[1];
    $this->$songInfo["price"] = 1.99;


    }

    public function __get($name)
     {    return $this->$songInfo[$name]; }

     public function __set($name, $value)
      {    $this->songList[$name] = $value;}


        public function toTable(){
        echo"
            <td>".$songInfo['name']."</td>
            <td>".$songInfo['artist']."</td>
            <td>".$songInfo['price']."</td>";
        }

}

  ?>
