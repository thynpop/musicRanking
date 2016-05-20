<?php
$connection = mysqli_connect("localhost","root","","music_ranking");
  $data = $_GET["data"];
  echo '<script type="text/javascript">';
  echo "var data = '$data';"; 
  echo '</script>';
//<div id ="ytplayer"></div>
?>


<?php
$connection = mysqli_connect("localhost","root","","music_ranking");
$result1 = mysqli_query($connection, "SELECT s.songName , si.singerName , s.vote
            FROM singer si,song s WHERE s.singerID = si.singerID
            AND s.link = '$data' ");
$current1 = mysqli_fetch_assoc($result1);
        echo '<p><h5> '.$current1['songName'].' </h5></p>';
        echo '<p><h5> '.$current1['singerName'].' </h5></p>';
        echo '<p><h5>VOTE : '.$current1['vote'].' </h5></p>';
mysqli_close($connection);
?>

<script src="js/player.js"></script>