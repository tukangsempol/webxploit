<title>Auto Visitor</title>
<?php
include("../head.php");
?>

<br><br><center><form method="GET">
<input type="text" class="con7" name="url" value="http://sitekntl.com/">
<input type="max" class="con7" name="max" value="100"> 
<input type="submit" class="kntd">
<center></form></br>
<font face="Ubuntu" color="red" size="4px">
<?php
if (!$_GET) die();
require("classjmbd/autovisitor.class.php");
$url = $_GET["url"]; 
$max = $_GET["max"];

for($i = 1; $i < $max+1; $i++) {
	$class = new autovisitor($url);
	echo $i.". SUKSES - [".$class->jalankan()."]<br>";
}
?>