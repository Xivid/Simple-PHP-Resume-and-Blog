<?
define("adminpass", "yangz123");
define("current", "Zip Tools");
?>
<? require_once("header.php") ?>
<div class="info">This is Xivid's Zip Tool running on my own notebook JUST for this website.</div>
<div class="form">
	<form method="POST">
	<div class="thead">Extract an existing zip file<input type="hidden" name="action" value="1"></div>
	<div class="trow"><lable for="filename" id="filename">File Name(including path):</lable><input type="text" name="filename" value=".zip"></div>
	<div class="trow"><lable for="directory" id="directory">Extract Directory(leave ./ for root):</lable><input type="text" name="directory" value="./"></div>
	<div class="trow"><lable for="password" id="password">Password:</lable><input type="password" name="password"></div>
	<?
	if($_POST["action"]==1){
		if($_POST["password"]==adminpass){
			$zip = new ZipArchive;
			$res = $zip->open($_POST["filename"]);
			if($res === True){
				$zip->extractTo($_POST["directory"]);
				$zip->close();
				$info = "Extract to ".$_POST["directory"]." succeeded.";
			}
			else {
				$info = "Zip file opening failed.";
			}
		}
		else $info = "Password error.";
		echo '<div class="trow" style="text-align: center; color: #AFCA00;">'.$info.'</div>';
	}?>
	<div class="ttail"><input type="submit" value="Extract" class="submit"><input type="reset" value="Reset" class="submit"></div>
	</form>
</div>
<div class="form">
	<form method="POST" enctype="multipart/form-data">
	<div class="thead">Extract a zip file by uploading<input type="hidden" name="action" value="2"></div>
	<div class="trow"><lable for="file" id="file">File:</lable><input type="file" name="file"></div>
	<div class="trow"><lable for="directory" id="directory">Extract Directory(leave ./ for root):</lable><input type="text" name="directory" value="./"></div>
	<div class="trow"><lable for="password" id="password">Password:</lable><input type="password" name="password"></div>
	<?if($_POST["action"]==2){
		if($_POST["password"] != adminpass) $info = "Failed: PassWord Error!";
		else{
			if($_FILES["file"]["error"]==4) $info = "Error: No file uploaded.";
			else if($_FILES["file"]["size"] <= 10500000){
				$zip = new ZipArchive;
				$zip->open($_FILES["file"]["tmp_name"]);
				$zip->extractTo($_POST["directory"]);
				$zip->close;
				$info = "Success: extracted ".$_FILES["file"]["name"]." to ".$_POST["directory"];
			} 
			else $info = "Error: size > 10MB.";
		}
		echo '<div class="trow" style="text-align: center; color: #AFCA00;">'.$info.'</div>';
	}?>
	<div class="ttail"><input type="submit" value="Upload and Extract" class="submit"><input type="reset" value="Reset" class="submit"></div>
	</form>
</div>
</div>
<? require_once("footer.php") ?>
</body>
</html>