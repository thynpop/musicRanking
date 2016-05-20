<html><head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<link href="css/style.css" rel="stylesheet" type="text/css" media="all">
		<link href="http://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet" type="text/css">
		    <!-- BOOTSTRAP STYLES-->
	<link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!--CUSTOM BASIC STYLES-->
    <link href="assets/css/basic.css" rel="stylesheet" />
    <!--CUSTOM MAIN STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
    <!-- GOOGLE FONTS-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
	</head>
	<body>
		<!--start-wrap-->
		<div class="wrap">
			<!--start-header-->
			<div class="header">
			<!--start-top-header-->
			<div class="top-header">
				
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
						<li><a href="#">Your account</a></li>
					</ul>
				</div>
				<div class="clear"> </div>
			</div>
			<div class="clear"> </div>
			<div class="top-nav">
				<ul>
					<li><a href="index.html">Home</a></li>
					<li><a href="music.html">Music</a></li>
					<li><a href="topChart.html">Top Chart</a></li>
					<div class="clear"> </div>
				</ul>
			</div>
			<!--end-top-header-->
			<!--End-header-->
			</div><br>
				<div class="content">
					<div class="products-box">
					<div class="products">
						<h5><span>SEARCH</span>RESULT</h5>
						
					</div>

					<div class="table-responsive">
						<table class="table table-striped table-bordered table-hover" id="InvoiceTable"  style="border: 1px solid black; border-collapse: collapse;">
							<thead class="thead">
								<tr>
									<th>SONG</th>
									<th>SINGER</th>
									<th>VOTE</th>
									<th>PLAY</th>
								</tr>
							</thead>

							<!-- query for seach song and singer-->
							<?php
								$connection = mysqli_connect("localhost","bagjnsinth_mr","Cpe333","bagjnsinth_musicrank"); //connect to the music_ranking database

					$songName = $_GET["songName"]; //get input from search box

					//show song name, singer name and vote from singer and song table that songname like an input
					$result = mysqli_query($connection, "SELECT s.songName , si.singerName , s.vote, s.link
						FROM singer si, song s 
						WHERE s.singerID = si.singerID
						AND s.songName LIKE '$songName%' ");
				if ($result->num_rows > 0) 
		{
					$json = array();
					//loop for print the information       
					while($current = mysqli_fetch_assoc($result))
					{
						echo "<tr>";
						echo "<td>" . $current["songName"] . "</td>";
						echo "<td>" . $current["singerName"] . "</td>";
						echo "<td>" . $current["vote"] . "</td>";
						echo '<td> <a href="mv.php?data=' . $current["link"] . '">PLAY</a> </td>';
						echo "</tr>";
					}
					echo json_encode($json);
					mysqli_close($connection);

					//show song name, singer name and vote from singer and song table that singername like an input      
					$connection = mysqli_connect("localhost","bagjnsinth_mr","Cpe333","bagjnsinth_musicrank"); //connect to the music_ranking database


					$result1 = mysqli_query($connection, "SELECT s.songName , si.singerName , s.vote, s.link
						FROM singer si,song s WHERE s.singerID = si.singerID
						AND si.singerName LIKE '$songName%' ");

					$json = array();
					//loop for print the information       
					while($current1 = mysqli_fetch_assoc($result1))
					{
						echo "<tr>";
						echo "<td>" . $current1["songName"] .  "</td>";
						echo "<td>" . $current1["singerName"] . "</td>";
						echo "<td>" . $current1["vote"] . "</td>";
						echo '<td> <a href="mv.php?data=' . $current1["link"] . ' ">PLAY</a> </td>';
						echo "</tr>";
					}
					echo json_encode($json);
					mysqli_close($connection);

		}

else 
		echo "<h2><center> Not found '$songName' </center></h2>";

					?>




 
</script>



				</table>
			</div>

					
				</div>
			</div>
		</div>
			<div class="clear"> </div>
			<div class="footer">
				<div class="wrap">
				<div class="section group">
				<div class="col_1_of_4 span_1_of_4">
					<h3>INFORMATION</h3>
					<ul>
						<li><a href="#">About us</a></li>
						<li><a href="#">Sitemap</a></li>
						<li><a href="#">Contact</a></li>
						<li><a href="#">Terms and conditions</a></li>
						<li><a href="#">Legal Notice</a></li>
					</ul>
				</div>
				<div class="col_1_of_4 span_1_of_4">
					<h3>OUR OFFERS</h3>
					<ul>
						<li><a href="#">New products</a></li>
						<li><a href="#">top sellers</a></li>
						<li><a href="#">Specials</a></li>
						<li><a href="#">Products</a></li>
						<li><a href="#">Comments</a></li>
					</ul>
				</div>
				<div class="col_1_of_4 span_1_of_4">
					<h3>YOUR ACCOUNT</h3>
					<ul>
						<li><a href="#">Your Account</a></li>
						<li><a href="#">Personal info</a></li>
						<li><a href="#">Prices</a></li>
						<li><a href="#">Address</a></li>
						<li><a href="#">Locations</a></li>
					</ul>
				</div>
				<div class="col_1_of_4 span_1_of_4 footer-lastgrid">
					<h3>Get in touch</h3>
					<ul>
						<li><a href="#"><img src="images/facebook.png" title="facebook"></a></li>
						<li><a href="#"><img src="images/twitter.png" title="Twiiter"></a></li>
						<li><a href="#"><img src="images/rss.png" title="Rss"></a></li>
						<li><a href="#"><img src="images/gpluse.png" title="Google+"></a></li>
					</ul>
					<p>Design by <a href="#">W3layouts</a></p>
				</div>
			</div>
			</div>
			</div>
		</div>
		<!---End-wrap-->
	


</body></html>