






<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

$connection = mysqli_connect("localhost","root","","music_ranking");
$songName = $_GET["songName"];



$result2 = mysqli_query($connection, "SELECT s.songName , si.singerName , s.vote
FROM singer si,song s
WHERE s.singerID = si.singerID
AND s.songName LIKE '$songName%'");

    $json = array();
         while($current2 = mysqli_fetch_array($result2, MYSQLI_ASSOC)) 
             {
            $json[] = array(
         'songName' => $current2['songName'],
             'singerName' => $current2['singerName'],
            'vote' => $current2['vote']);
                            }

                    echo json_encode($json);
                    
                    mysqli_close($connection);




?>
                                        