<?
define("current", "Index");
$template_dir = "templates/default/";
require_once($template_dir."header.php");
?>

<div id="content"><?
	$query = mysql_query("select * from `blog_entry` order by id desc");
	while($row = mysql_fetch_array($query)){?>
	<div class="entry">
		<div class="etitle"><a href="show.php?id=<? echo $row['id'] ?>"><?echo $row['entry_title'] ?></a></div>
		<div class="econtent"><? echo mb_substr($row['entry_content'], 0, 500, "utf-8")?></div>
	</div><?}?>
</div>
</div>
<? require_once($template_dir."footer.php") ?>
</body>
</html>
