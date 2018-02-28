<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Sinister Tunes</title>
        <link rel="stylesheet" href="../../css/SinisterTunes.css" type="text/css">
    </head>
    <body>
        <div class="grid">
            <div class="header">
                <div class="name">
                    <h1>Sinister tunes</h1>
                </div>
            </div>
            <div class="songList">
                <table>
                  <tr>
                    <thead id="tableHead">
                      <td>Song</td>
                      <td>Artist</td>
                      <td>price</td>
                    </thead>
                  </tr>
                  <?php
                  require_once '../Song.php';
                  require_once '../playlist.php';
                    $fh = fopen('../../res/sinisterTunesCatalog.txt','r');
                      while ($line = fgets($fh)) {
                        $currentSong = new Song($line);
                         $currentSong->toTable();
                      }
                      fclose($fh);
                      ?>

                  </table>


                <tr>
                    <td><input type="button" name="Buy" ></td>
                </tr>
            </div>
            <div class="footer">

            </div>
        </div>
    </body>
</html>
