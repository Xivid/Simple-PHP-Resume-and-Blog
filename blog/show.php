<?
if(!$_GET) die("No argument.");
$template_dir = "templates/default/";
define("current", "Show");
require($template_dir."header.php");
?>
<div id="content">
	<div class="entry">
		<?
			$query = mysql_query("select * from `blog_entry` where id=".$_GET["id"]);
			$row = mysql_fetch_array($query);
		?>
		<div class="etitle" style="text-align: center"><?echo $row['entry_title'] ?>
			<span style="font-size:0.7em;"><a href="edit.php?id=<?echo $row['id']?>" alt="edit" style="color:orange">[edit]</a></span>
			<span style="font-size:0.7em;"><a href="edit.php?id=<?echo $row['id']?>&action=del" alt="delete" style="color:red">[delete]</a></span>
		</div>
		<div class="econtent">
			<? echo $row['entry_content']?>
		</div>
		<hr>
		<!-- 多说评论框 start -->
		<div class="ds-thread" data-thread-key="<?echo $row['id']?>" data-title="<?echo $row['entry_title'] ?>" data-url="show.php?id=<?echo $row['id']?>"></div>
		<!-- 多说评论框 end -->
		<!-- 多说公共JS代码 start (一个网页只需插入一次) -->
		<script type="text/javascript">
		var duoshuoQuery = {short_name:"helloxivid"};
			(function() {
				var ds = document.createElement('script');
				ds.type = 'text/javascript';ds.async = true;
				ds.src = (document.location.protocol == 'https:' ? 'https:' : 'http:') + '//static.duoshuo.com/embed.js';
				ds.charset = 'UTF-8';
				(document.getElementsByTagName('head')[0] 
				 || document.getElementsByTagName('body')[0]).appendChild(ds);
			})();
			</script>
		<!-- 多说公共JS代码 end -->
	</div>
</div>
</div>
<? require_once($template_dir."footer.php") ?>
</body>
</html>
