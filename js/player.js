  console.log(data)


  var tag = document.createElement('script');
  tag.src = "https://www.youtube.com/player_api";
  var firstScriptTag = document.getElementsByTagName('script')[0];
  firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

  window.location.replace("http://127.0.0.1/SPLICE/web/web/mv.html");
  onYouTubePlayerAPIReady();
  
  var player;
  function onYouTubePlayerAPIReady() {
    player = new YT.Player('ytplayer', { height: '390', width: '640', videoId: data });
  }
