<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->


<!DOCTYPE HTML>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<link href="css/style.css" rel="stylesheet" type="text/css"  media="all" />
		<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
		<script src="js/jquery-1.6.js" type="text/javascript"></script>
		<script src="js/jquery.jqzoom-core.js" type="text/javascript"></script>
		<link rel="stylesheet" href="css/jquery.jqzoom.css" type="text/css">
		<!-- TABLE STYLES-->
		<link href="assets/js/dataTables/dataTables.bootstrap.css" rel="stylesheet" />
		<!-- BOOTSTRAP STYLES-->
	    <link href="assets/css/bootstrap.css" rel="stylesheet" />
	     <!-- FONTAWESOME STYLES-->
	    <link href="assets/css/font-awesome.css" rel="stylesheet" />
	    <!-- CUSTOM STYLES-->
	    <link href="assets/css/custom.css" rel="stylesheet" />
	     <!-- GOOGLE FONTS-->
	   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
		<script type="text/javascript">
			$(document).ready(function() {
				$('.jqzoom').jqzoom({
			            zoomType: 'standard',
			            lens:true,
			            preloadImages: false,
			            alwaysOn:false
			        });
				
			});
		</script>
		<style type="text/css">
		
		</style>
	</head>
	<body>





		<!--start-wrap-->
		<div class="wrap">
			<!--start-header-->
			<div class="header">
			<!--start-top-header-->
			
			<div class="clear"> </div>
			<div class="sub-header">
				<div class="logo">
					<a href="index.html"><img src="images/LG.png" title="logo" /></a>
				</div>
				<div class="sub-header-center">
					<form id="songName" method="get" action="searchn.php"> 

					<input type="text" class="form-control" id="songName" name="songName" placeholder="Enter song name or singer name">
					<button type="submit" title="" class="add-author" id ="AddMore">SEARCH</button>
					<!--<input type="text"><input type="submit" id="songName" name="songName"  />-->
				</form>
				</div>
				<div class="sub-header-right">
					<ul>
						<li><a href="#">log in</a></li>
					</ul>
				</div>
				<div class="clear"> </div>
			</div>
			<div class="clear"> </div>
			<div class="top-nav">
				<ul>
					<li class="active1"><a href="index.html">Home</a></li>
					<li><a href="music.html">Music</a></li>
					<li><a href="topChart.html">Top Chart</a></li>
					<div class="clear"> </div>
				</ul>
			</div>
			<!--end-top-header-->
			<!--End-header-->
			</div>



				<div class="content">
					<div class="single-page"><br />
						<div class="clear"> </div>
							<div class="product-info">
								<div class="product-image col-md-8">
									<div class="clearfix" id="content" >


												<!--This one is function for play youtube-->
												<?php
												$connection = mysqli_connect("localhost","root","","music_ranking");
												  $data = $_GET["data"];
												  echo '<script type="text/javascript">';
												  echo "var data = '$data';"; 
												  echo '</script>';
												?>
												<div id ="ytplayer"></div>
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

								        <div class="product-share">
									<h3>share on:</h3>
									<ul>
										<li><a href="#"><img src="images/facebook.png" title="facebook" /></a></li>
										<li><a href="#"><img src="images/twitter.png" title="Twitter" /></a></li>
										<li><a href="#"><img src="images/rss.png" title="Rss" /></a></li>
									</ul>
								</div>
								    </div>
									<br/>
								</div>
							</div>
						

							   <!-- /. ROW  -->
				            <div class="row">
				                <div class="col-md-4">
				                      <!--    Striped Rows Table  -->
				                    <div class="panel panel-default">
				                        <div class="panel-heading">
				                            COMMENT
				                        </div>
				                        <div class="panel-body">
				                            <div class="table-responsive">
				                                <table class="table table-striped">
				                                    <thead>
				                                        <tr>
				                                            
				                                            <th>
				                                           	<div class="text">
		                                                      <a href="#" class="activity-img"><img class="avatar" src="images/chat-avatar.jpg" alt=""></a>
		                                                      <p class="attribution"><a href="#">Sarah saw</a> at 5:25am, 30th Octmber 2014</p>
		                                                      <p>Knowledge speaks, but wisdom listens.</p>                                                      
		                                                  	</div>
		                                              		</th>
				                                            
				                                        </tr>
				                                    </thead>
				                                    <tbody>
				                                        <tr>
				                                        <td>
				                                          	<div class="text">
		                                                      <a href="#" class="activity-img"><img class="avatar" src="images/avatar1_small.jpg" alt=""></a>
		                                                      <p class="attribution"><a href="#">Layla night</a> at 5:25am, 30th Octmber 2014</p>
		                                                      <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
	                                                 		</div>
	                                                 	</td>
				                                        </tr>
				                                        <tr>
				                                            <td>
				                                            	<div class="text">
			                                                      <a href="#" class="activity-img"><img class="avatar" src="images/avatar-mini2.jpg" alt=""></a>
			                                                      <p class="attribution"><a href="#">Andriana lee</a> at 5:25am, 30th Octmber 2014</p>
			                                                      <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</p>
			                                                  	</div>
				                                            </td>
				                                        </tr>
				                                        <tr>
				                                            <td>
				                                            	<div class="text">
			                                                      <a href="#" class="activity-img"><img class="avatar" src="images/avatar-mini.jpg" alt=""></a>
			                                                      <p class="attribution"><a href="#">Layla night</a> at 5:25am, 30th Octmber 2014</p>
			                                                      <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
		                                                 		</div>
				                                            </td>
				                                        </tr>
				                                    </tbody>
				                                </table>
				                            </div>
				                        </div>
				                    </div>
				                    <!--  End  Striped Rows Table  -->
				                </div>





							</div>
							<div class="clear"> </div>

					</div>
				</div>
			<div class="clear"> </div>
		</div>



			<div class="footer">
				<div class="wrap">
				<div class="section group">
				<div class="col_1_of_4 span_1_of_4">
					<h3>INFORMATION</h3>
					<ul>
						<li><a href="#">About us</a></li>
						<li><a href="#">Contact</a></li>
						<li><a href="#">Terms and conditions</a></li>
					</ul>
				</div>
				<div class="col_1_of_4 span_1_of_4">
					<h3>OUR OFFERS</h3>
					<ul>
						<li><a href="#">Specials</a></li>
						<li><a href="#">Comments</a></li>
					</ul>
				</div>
				<div class="col_1_of_4 span_1_of_4">
					<h3>YOUR ACCOUNT</h3>
					<ul>
						<li><a href="#">Personal info</a></li>
						<li><a href="#">Address</a></li>
					</ul>
				</div>

				
				<div class="col_1_of_4 span_1_of_4 footer-lastgrid">
					<h3>Get in touch</h3>
					<ul>
						<li><a href="#"><img src="images/facebook.png" title="facebook" /></a></li>
						<li><a href="#"><img src="images/twitter.png" title="Twiiter" /></a></li>
						<li><a href="#"><img src="images/rss.png" title="Rss" /></a></li>
						<li><a href="#"><img src="images/gpluse.png" title="Google+" /></a></li>
					</ul>
				</div>
			</div>
			</div>
		</div>
		<!---End-wrap-->

		<script type="text/javascript">
			  //document.getElementById("write").innerHTML = window.location.search;

			  var tag = document.createElement('script');
			  tag.src = "https://www.youtube.com/player_api";
			  var firstScriptTag = document.getElementsByTagName('script')[0];
			  firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

			  var player;
			  function onYouTubePlayerAPIReady() {
			    player = new YT.Player('ytplayer', { height: '390', width: '640', videoId: data });
			  }
		</script>
	</body>
</html>

