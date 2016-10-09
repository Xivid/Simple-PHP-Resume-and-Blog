<?php 
define("current", "Index");
$template_dir = "templates/default/";
require_once($template_dir."header.php");
?>

<div id="content"><?php 
	$query = mysql_query("select * from `blog_entry` order by id desc");
	while($row = mysql_fetch_array($query)){?>
	<div class="entry">
		<div class="etitle"><a href="show.php?id=<?php  echo $row['id'] ?>"><?php echo $row['entry_title'] ?></a></div>
		<div class="econtent"><?php  echo mb_substr($row['entry_content'], 0, 500, "utf-8")?></div>
	</div><?php }?>
</div>
</div>
<?php  require_once($template_dir."footer.php") ?>
</body>
</html>
