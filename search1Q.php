<!-- create table-->
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Responsive Bootstrap Advance Admin Template</title>

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
<div class="table-responsive">
    <table class="table table-striped table-bordered table-hover" id="InvoiceTable"  style="border: 1px solid black; border-collapse: collapse;">
        <thead>
            <tr>
                
                <th>SONG</th>
                <th>SINGER</th>
                <th>VOTE</th>
             
            </tr>
        </thead>

<!-- query for seach song and singer-->
<?php
$connection = mysqli_connect("localhost","root","","music_ranking"); //connect to the music_ranking database
$songName = $_GET["songName"]; //get input from search box

//show song name, singer name and vote from singer and song table that songname like an input
$result = mysqli_query($connection, "SELECT s.songName , si.singerName , s.vote
FROM singer si, song s 
WHERE s.singerID = si.singerID
AND s.songName LIKE '$songName%' ");

    $json = array();
//loop for print the information       
while($current = mysqli_fetch_assoc($result))
    {
        echo "<tr>";
        echo "<td>" . $current["songName"] . "</td>" ;
        echo "<td>" . $current["singerName"] . "</td>";
        echo "<td>" . $current["vote"] . "</td>";
        echo "</tr>";
    }
        echo json_encode($json);
        mysqli_close($connection);
//show song name, singer name and vote from singer and song table that singername like an input      
$connection = mysqli_connect("localhost","root","","music_ranking");
$result1 = mysqli_query($connection, "SELECT s.songName , si.singerName , s.vote
FROM singer si,song s WHERE s.singerID = si.singerID
AND si.singerName LIKE '$songName%'  ");

    $json = array();
//loop for print the information       
while($current1 = mysqli_fetch_assoc($result1))
    {
        echo "<tr>";
        echo "<td>" . $current1["songName"] . "</td>" ;
        echo "<td>" . $current1["singerName"] . "</td>";
        echo "<td>" . $current1["vote"] . "</td>";
        echo "</tr>";
    }
        echo json_encode($json);
        mysqli_close($connection);
?>


    </table>
</div>
</html>