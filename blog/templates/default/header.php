<?php require_once("connect.php");
memcache_init();?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title><?php  
if(current=="Post") echo 'Post New Entry - ';
else if(current=="Edit") echo 'Edit - ';
else if(current=="Show") {
	$query = mysql_query("select entry_title from `blog_entry` where id=".$_GET["id"]);
	$row = mysql_fetch_array($query);
	echo $row['entry_title'].' - ';
}
?>信息聚合</title>
<link rel="stylesheet" type="text/css" href="<?php  echo $template_dir."styles.css" ?>">
</head>
<body>
<header>Hello Xivid!</header>
<nav id="nav">
	<span class="button"><a href="/index.php">Index</a></span>
	<span class="button" id="current"><a href="/blog/">信息聚合</a></span>
	<span class="button"><a href="http://vivid.name/">个人博客</a></span>
</nav>
<nav id="nav1">
	<span class="button1"<?php  if(current=="Index") echo' id="current"'?>><a href="index.php" class="nav1btn">Index</a></span>
	<span class="button1"<?php  if(current=="Post") echo' id="current"'?>><a href="post.php" class="nav1btn">Post New Entry</a></span>
</nav>

<div id="main">
<div id="sidebar">
	<div class="widget" id="entrylist">
		<div class="widname">Entry List</div>
		<div class="info"><?php 
			$sql = "select id, entry_title from `blog_entry` order by id desc";
			$query = mysql_query($sql);
			while($row = mysql_fetch_array($query)){?><a href="show.php?id=<?php  echo $row['id'] ?>"><?php echo $row['entry_title'] ?></a><br><?php }?>
		</div>
	</div>
	<div class="widget" id="viewcount">
		<div class="widname">View Count</div>
		<div class="info"><?php  echo getcount(); ?></div>
	</div>
</div>

<?php 
function getcount(){
	$file = "saemc://visit.count";
	if(!is_readable($file)) {file_put_contents($file, "1"); $count=1;}
	else {$count = file_get_contents($file); $count++; file_put_contents($file, $count);}
	return "visit:".$count;
}
?>