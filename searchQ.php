<?php

    header("Access-Control-Allow-Origin: *");
    header("Content-Type: application/json; charset=UTF-8");
$con = mysqli_connect("127.0.0.1","root","","music_ranking");
if (mysqli_connect_errno()){echo "Failed to connect to MySQL: " . mysqli_connect_error();}




$sql = "SELECT s.songName , si.singerName , s.vote
FROM singer si,song s
WHERE s.singerID = si.singerID";

    $result = mysqli_query($con, $sql) or die ("Failed to query ". mysqli_error($con));
    $json = array();
         while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) 
             {
            $json[] = array(
         'songName' => $row['songName'],
             'singerName' => $row['singerName'],
            'vote' => $row['vote']);
                            }

                    echo json_encode($json);
                    //echo json_encode($json2);
                    mysqli_close($con);

?>

