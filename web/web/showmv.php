<?php
  $data = '6hH9m1G9f10';

  echo '<script type="text/javascript">';
  echo "var data = '$data';"; 
  echo '</script>';
?>
<div id ="ytplayer"></div>
<script type="text/javascript" >

console.log(data)
  var tag = document.createElement('script');
  tag.src = "https://www.youtube.com/player_api";
  var firstScriptTag = document.getElementsByTagName('script')[0];
  firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

  var player;
  function onYouTubePlayerAPIReady() {
    player = new YT.Player('ytplayer', { height: '390', width: '640', videoId: data });
  }




</script>

