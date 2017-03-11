<title>Cms Scanner Vuln Online</title>
<?php
include("../head.php");
?>
<?php

@set_time_limit(0);
@error_reporting(0);

// Script Functions , start ..!

function ask_exploit_db($component){

$exploitdb ="http://www.exploit-db.com/search/?action=search&filter_page=1&filter_description=$component&filter_exploit_text=&filter_author=&filter_platform=0&filter_type=0&filter_lang_id=0&filter_port=&filter_osvdb=&filter_cve=";

$result = @file_get_contents($exploitdb);

if (eregi("No results",$result))  {

echo"<td>Tidak Ditemukan</td><td><a href='http://www.google.com/search?hl=en&q=download+$component'>Download</a></td></tr>";

}else{

echo"<td><a href='$exploitdb'>Klik Ini..!</a></td><td><--</td></tr>";

}
}

/**************************************************************/
/* Joomla Conf */

function get_components($site){

$source = @file_get_contents($site);

preg_match_all('{option,(.*?)/}i',$source,$f);
preg_match_all('{option=(.*?)(&amp;|&|")}i',$source,$f2);
preg_match_all('{/components/(.*?)/}i',$source,$f3);

$arz=array_merge($f2[1],$f[1],$f3[1]);

$coms=array();

if(count($arz)==0){ echo "<tr><td colspan=3>[~] Tidak Ditemukan ! Menurut Saya Site Error atau Option salah :-</td></tr>";}

foreach(array_unique($arz) as $x){

$coms[]=$x;
}

foreach($coms as $comm){

echo "<tr><td>$comm</td>";

ask_exploit_db($comm);

}

}

/**************************************************************/
/* WP Conf */

function get_plugins($site){

$source = @file_get_contents($site);

preg_match_all("#/plugins/(.*?)/#i", $source, $f);

$plugins=array_unique($f[1]);

if(count($plugins)==0){ echo "<tr><td colspan=1>[~]  Tidak Ditemukan ! Menurut Saya Site Error atau Option salah :-</td></tr>";}

foreach($plugins as $plugin){

echo "<tr><td>$plugin</td>";

ask_exploit_db($plugin);

}

}

/**************************************************************/
/* Nuke's Conf */

function get_numod($site){

$source = @file_get_contents($site);

preg_match_all('{?name=(.*?)/}i',$source,$f);
preg_match_all('{?name=(.*?)(&amp;|&|l_op=")}i',$source,$f2);
preg_match_all('{/modules/(.*?)/}i',$source,$f3);

$arz=array_merge($f2[1],$f[1],$f3[1]);

$coms=array();

if(count($arz)==0){ echo "<tr><td colspan=3>[~]  Tidak Ditemukan ! Menurut Saya Site Error atau Option salah :-</td></tr>";}

foreach(array_unique($arz) as $x){

$coms[]=$x;
}

foreach($coms as $nmod){

echo "<tr><td>$nmod</td>";

ask_exploit_db($nmod);

}

}

/*****************************************************/
/* Xoops Conf */

function get_xoomod($site){

$source = @file_get_contents($site);

preg_match_all('{/modules/(.*?)/}i',$source,$f);

$arz=array_merge($f[1]);

$coms=array();

if(count($arz)==0){ echo "<tr><td colspan=3>[~]  Tidak Ditemukan ! Menurut Saya Site Error atau Option salah :-</td></tr>";}

foreach(array_unique($arz) as $x){

$coms[]=$x;
}

foreach($coms as $xmod){

echo "<tr><td>$xmod</td>";

ask_exploit_db($xmod);

}

}

/**************************************************************/
 /* Header */
function t_header($site){

?>

<?
echo'<table align="center" border="1" width="50%" cellspacing="1" cellpadding="5">';

echo'
<tr>
<td>Site : <a href="'.$site.'">'.$site.'</a></td>
<td>Exploit-db</b></td>
<td>Exploit it !</td>
</tr>
';

}

?>
<center>
<br>
<form method="POST" action=""  class='header-izz'>
	<p align="center"><input type="text" name="site" value="http://Target Lu Azzigh.com/" class='con7'>
	<br><br>
	<select class="con7"  name="inimeki">
	<option>Wordpress</option>
	<option>Joomla</option>
	<option>Nuke's</option>
	<option>Xoops</option>
	
	</select><br><br><input type="submit" class="kntd" value="Get Xploit" class='button'></p>
</form>
<?

// Start Scan :P :P ...

if($_POST){

$site=strip_tags(trim($_POST['site']));

t_header($site);

echo $x01 = ($_POST['inimeki']=="Wordpress") ? get_plugins($site):"";
echo $x02 = ($_POST['inimeki']=="Joomla") ? get_components($site):"";
echo $x03 = ($_POST['inimeki']=="Nuke's") ? get_numod($site):"";
echo $x04 = ($_POST['inimeki']=="Xoops") ? get_xoomod($site):"";

}
exit;
?>