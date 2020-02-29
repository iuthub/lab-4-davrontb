<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN"
 "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title>Music Viewer</title>
		<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
		<link href="viewer.css" type="text/css" rel="stylesheet" />
	</head>
	<body>
		<div id="header">

			<h1>190M Music Playlist Viewer</h1>
			<h2>Search Through Your Playlists and Music</h2>
		</div>


		<div id="listarea">
			<ul id="musiclist">
                
                <?php
                    foreach (glob("songs/*.mp3") as $filename) {
                        if(!isset($_REQUEST["playlist"])){
                ?>
                    <li class="mp3item">
                        <a href="<?= $filename ?>">
                            <?=
                                basename($filename).PHP_EOL;
                            ?>
                        </a>
                    </li>
                <?php } } ?>

                <?php
                    foreach (glob("songs/*.txt") as $filename) {
                        if(!isset($_REQUEST["playlist"])){
                ?>
                    <li class="playlistitem">
                        <a href="<?= $filename ?>">
                            <?=
                                basename($filename).PHP_EOL;
                            ?>
                        </a>
                    </li>
                <?php } }?>

                <?php
                    if(isset($_REQUEST["playlist"]) && $_REQUEST["playlist"]=="mypicks.txt"){
                        foreach (glob("songs/*.mp3") as $filename) {
                            if($filename=="songs/Be More.mp3" || $filename=="songs/Just Because.mp3" ||  $filename=="songs/Drift Away.mp3" ){
                ?>
                    <li class="mp3item">
                        <a href="<?= $filename ?>">
                            <?=
                                basename($filename).PHP_EOL;
                            ?>
                        </a>
                    </li>
                <?php } } } ?>

                <?php
                    if(isset($_REQUEST["playlist"]) && $_REQUEST["playlist"]=="190M Mix.txt"){
                        foreach (glob("songs/*.mp3") as $filename) {
                            if($filename=="songs/Be More.mp3" || $filename=="songs/Hello.mp3" ||  $filename=="songs/Drift Away.mp3" || $filename=="songs/190M Rap.mp3" ||  $filename=="songs/Panda Sneeze.mp3"){
                ?>
                    <li class="mp3item">
                        <a href="<?= $filename ?>">
                            <?=
                                basename($filename).PHP_EOL;
                            ?>
                        </a>
                    </li>
                <?php } } } ?>

                <?php
                    if(isset($_REQUEST["playlist"]) && $_REQUEST["playlist"]=="playlist.txt"){
                        foreach (glob("songs/*.mp3") as $filename) {
                            if($filename=="songs/Be More.mp3" || $filename=="songs/Hello.mp3" ||  $filename=="songs/Drift Away.mp3"  ||  $filename=="songs/Panda Sneeze.mp3"){
                ?>
                    <li class="mp3item">
                        <a href="<?= $filename ?>">
                            <?=
                                basename($filename).PHP_EOL;
                            ?>
                        </a>
                    </li>
                <?php } } } ?>

			</ul>
		</div>
	</body>
</html>
