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
            
            <h2><a href="http://localhost/lab-4-davrontb/webpage/music.php"> Main page</a></h2>
		</div>


		<div id="listarea">
			<ul id="musiclist">
                
                <?php
                function quickSort($arr)
                {
                    $count = count($arr);
                
                    if ($count < 2) {
                        return $arr;
                    }
                
                    $leftArray = $rightArray = array();
                    $middle = $arr [0]; // base value
                
                    for ($i = 1; $i < $count; $i++) {
                        // Less than the reference value, deposited on the left; greater than the reference value, deposited on the right.
                        if ($arr[$i] < $middle) {
                            $leftArray[] = $arr[$i];
                        } else {
                            $rightArray[] = $arr[$i];
                        }
                    }
                
                    $leftArray = quickSort($leftArray);
                    $rightArray = quickSort($rightArray);
                
                    return array_merge($leftArray, array($middle), $rightArray);
                    // reverse order
                    // return array_merge($rightArray, array($middle), $leftArray);
                }
                
                
             
                    function myshuffle($arr)
                    {   
                        if(isset($_REQUEST["bysize"])) {return quicksort($arr); }
                        if(!isset($_REQUEST["shuffle"]))return $arr;
                        // extract the array keys
                        $keys = [];
                        foreach ($arr as $key => $value) {
                            $keys[] = $key;
                        }
                    
                        // shuffle the keys    
                        for ($i = count($keys) - 1; $i >= 1; --$i) {
                            $r = mt_rand(0, $i);
                            if ($r != $i) {
                                $tmp = $keys[$i];
                                $keys[$i] = $keys[$r];
                                $keys[$r] = $tmp;
                            }
                        }
                    
                        // reconstitute
                        $result = [];
                        foreach ($keys as $key) {
                            $result[$key] = $arr[$key];
                        }
                    
                        return $result;
                    }
                    //$sh=shuffle(glob("songs/*.mp3"));
                    foreach (myshuffle(glob("songs/*.mp3"))  as $filename) {
                        if(!isset($_REQUEST["playlist"])){
                ?>
                    <li class="mp3item">
                        <a href="<?= $filename ?>">
                            <?=
                                basename($filename).PHP_EOL;
                            ?>
                            
                            <?php
                                 if(filesize($filename)<=1023)
                                    echo "(".filesize($filename) ." b)";
                                if(filesize($filename)>1023 && filesize($filename)<=1048575)
                                    echo "(".round(filesize($filename)/1024,2) ." kb)";
                                if(filesize($filename)>1048575)
                                    echo "(".round(filesize($filename)/1024/1024,2) ." mb)";
                                
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
                            <?php
                                 if(filesize($filename)<=1023)
                                    echo "(".filesize($filename) ." b)";
                                if(filesize($filename)>1023 && filesize($filename)<=1048575)
                                    echo "(".round(filesize($filename)/1024,2) ." kb)";
                                if(filesize($filename)>1048575)
                                    echo "(".round(filesize($filename)/1024/1024,2) ." mb)";
                                
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
                            <?php
                                 if(filesize($filename)<=1023)
                                    echo "(".filesize($filename) ." b)";
                                if(filesize($filename)>1023 && filesize($filename)<=1048575)
                                    echo "(".round(filesize($filename)/1024,2) ." kb)";
                                if(filesize($filename)>1048575)
                                    echo "(".round(filesize($filename)/1024/1024,2) ." mb)";
                                
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
                            <?php
                                 if(filesize($filename)<=1023)
                                    echo "(".filesize($filename) ." b)";
                                if(filesize($filename)>1023 && filesize($filename)<=1048575)
                                    echo "(".round(filesize($filename)/1024,2) ." kb)";
                                if(filesize($filename)>1048575)
                                    echo "(".round(filesize($filename)/1024/1024,2) ." mb)";
                                
                            ?>
                        </a>
                    </li>
                <?php } } } ?>

			</ul>
		</div>
	</body>
</html>
