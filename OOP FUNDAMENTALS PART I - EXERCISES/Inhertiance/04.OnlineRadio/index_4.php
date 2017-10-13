<?php
/**
 * Create an online radio station database. It should keep information about all added songs. On the first line you are going to get the number of songs you are going to try adding. On the next lines you will get the songs to be added in the format <artist name>;<song name>;<minutes:seconds>. To be valid, every song should have an artist name, a song name and length.
    Design a custom exception hierarchy for invalid songs:
    •	InvalidSongException
        o	InvalidArtistNameException
        o	InvalidSongNameException
        o	InvalidSongLengthException
            	InvalidSongMinutesException
            	InvalidSongSecondsException
* Validation
    •	Artist name should be between 3 and 20 symbols.
    •	Song name should be between 3 and 30 symbols.
    •	Song length should be between 0 second and 14 minutes and 59 seconds.
    •	Song minutes should be between 0 and 14.
    •	Song seconds should be between 0 and 59.
 */

require_once "Song.php";

$n=intval(trim(fgets(STDIN)));
$songs = [];
for($i=0; $i < $n; $i++) {
    try {
        $inputLine = explode(";", trim(fgets(STDIN)));
        $authorName = $inputLine[0];
        $songName = $inputLine[1];
        $duration = $inputLine[2];
        $songs[] = new Song($authorName, $songName, $duration);
        echo "Songs added.\r\n";
    }catch (Exception $e){
        echo $e->getMessage();
    }
}
echo "Songs added: ".count($songs)."\r\n";
$totalSeconds = 0;
foreach ($songs as $song){
    $data=explode(":",$song->getLength());
    $minutes=$data[0];
    $seconds=$data[1];
    $totalSeconds+=($minutes*60+$seconds);
}
echo "Playlist length: ".convertSeconds($totalSeconds);
function convertSeconds($seconds) {
    $t = round($seconds);
    return sprintf('%01dh %02dm %02ds', ($t/3600),($t/60%60), $t%60);
}