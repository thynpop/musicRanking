<?php
					$connection = mysqli_connect("localhost","bagjnsinth_mr","Cpe333","bagjnsinth_musicrank"); //connect to the music_ranking database
  $data = $_GET["data"];
  echo '<script type="text/javascript">';
  echo "var data = '$data';"; 
  echo '</script>';
//<div id ="ytplayer"></div>
?>


<?php
					$connection = mysqli_connect("localhost","bagjnsinth_mr","Cpe333","bagjnsinth_musicrank"); //connect to the music_ranking database
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