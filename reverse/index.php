<title>ReverseIp - Sempol1337</title>
<?php
include("../head.php");
?>
<center><font color='black' size='5' face='impact'>Reverse IP Domain Checker</center></font><div id=result>
<center><br /><br /><form><input type="text" class="con7" name="reverse" value="" style="margin-right:3px" size="27"><input type="submit" class="kntd" value="Reverse"></form></center>
<?php
$websitenya = $_GET["reverse"];
$ngeuegan = "http://domains.yougetsignal.com/domains.php";

//Curl Function
$ch = curl_init($ngeuegan);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1 );
curl_setopt($ch, CURLOPT_POSTFIELDS,  "remoteAddress=$websitenya&ket=");
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_POST, 1);
$resp = curl_exec($ch);
$resp = str_replace("[","", str_replace("]","", str_replace("\"\"","", str_replace(", ,",",", str_replace("{","", str_replace("{","", str_replace("}","", str_replace(", ",",", str_replace(", ",",",  str_replace("'","", str_replace("'","", str_replace(":",",", str_replace('"','', $resp ) ) ) ) ) ) ) ) ) ))));
$array = explode(",,", $resp);
unset($array[0]);
echo "<table class=tbl>";
foreach($array as $lnk)
{
	print "<center><a href='http://$lnk' target=_blank>$lnk</a><br>";
}
echo "</table>";
curl_close($ch);
?>