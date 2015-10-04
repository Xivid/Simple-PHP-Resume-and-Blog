<?
memcache_init();
function getcount(){
	$file = "saemc://src/visit.count";
	if(!is_readable($file)) {file_put_contents($file, "1"); $count=1;}
	else {$count = file_get_contents($file); $count++; file_put_contents($file, $count);}
	$suffix = "th";
	switch($count){
		case 1: $suffix = "st"; break;
		case 2: $suffix = "nd"; break;
		case 3: $suffix = "rd";
	}
	return $count.$suffix;
}
?>
<div id="footer">You make the <?php echo getcount(); ?> visit. <br>2014 &copy; <a href="http://vivid.name" target="_blank">Xivid</a></div>
