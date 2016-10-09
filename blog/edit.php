<?php if(!$_GET) die("No argument.");?>
<?php 
define("current", "Edit");
if($_POST){
	require_once("connect.php");
	if($_POST["password"] != "ibmibm") die("Invalid Password");
	$query = mysql_query("select * from `blog_entry` where id=".$_GET["id"]);
	$row = mysql_fetch_array($query);
	mysql_query("update `blog_entry` set `entry_title`='".$_POST["entry_title"]."', `entry_content`='".$_POST["entry_content"]."' where `id`=".$_GET["id"]);
	$url="show.php?id=".$row['id'];
	header("Location: ".$url); 
	exit;
}
?>
<?php 
$template_dir = "templates/default/";
require_once($template_dir."header.php");

if($_GET["action"] == 'del') {
mysql_query("delete from `blog_entry` where `id`=".$_GET['id']);
?>
Delete Succeeded. Returning in 1s...
<?php  
	echo "<script language='javascript' type='text/javascript'>";
	echo "setTimeout(\"location.href='index.php';\", 1000); ";
	echo "</script>";
}
else{
	$query = mysql_query("select * from `blog_entry` where id=".$_GET["id"]);
	$row = mysql_fetch_array($query);
?>
<div id="form">
	<form method="POST">
	<div class="thead">Edit an entry</div>
	<div class="trow"><lable for="password">Password:</lable><input type="password" name="password"></div>
	<div class="trow"><lable for="entry_title">Title:</lable><input type="text" name="entry_title" value="<?php echo $row['entry_title'] ?>" onfocus="if(this.value=='Untitled Entry') this.value='';" onblur="if(this.value=='') this.value='Untitled Entry';"></div>
	<div class="trow"><lable for="entry_content">Content:</lable><br><textarea name="entry_content"><?php  echo $row['entry_content']?></textarea></div>
	<div class="ttail"><input type="submit" value="Post" class="submit"><input type="reset" value="Reset" class="submit"></div>
	</form>
</div><?php }?>
<?php  require_once($template_dir."footer.php") ?>
</body>
</html>
