<?php 
if($_POST){
	require_once("connect.php");
	if($_POST["password"] != "ibmibm") die("Invalid Password");
	mysql_query("insert into blog_entry(id,entry_title,entry_content) "."values('','".$_POST["entry_name"]."','".$_POST["entry_content"]."')");
	
	$url="show.php?id=".mysql_insert_id();
	header("Location: ".$url); 
	exit;
}?>
<?php 
define("current", "Post");
$template_dir = "templates/default/";
require_once($template_dir."header.php") 
?>
<div id="form">
	<form method="POST">
	<div class="thead">Post an entry</div>
	<div class="trow"><lable for="password">Password:</lable><input type="password" name="password"></div>
	<div class="trow"><lable for="entry_name">Title:</lable><input type="text" name="entry_name" value="Untitled Entry" onfocus="if(this.value=='Untitled Entry') this.value='';" onblur="if(this.value=='') this.value='Untitled Entry';"></div>
	<div class="trow"><lable for="entry_content">Content:</lable><br><textarea name="entry_content"></textarea></div>
	<div class="ttail"><input type="submit" value="Post" class="submit"><input type="reset" value="Reset" class="submit"></div>
	</form>
</div>
</div>
<?php  require_once($template_dir."footer.php") ?>
</body>
</html>
