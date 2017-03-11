<title>Shell Scanner</title>
<?php
include("../head.php");
?>

 <form action="" method="post">
    <center><br /><br />
<table><form method='POST'>
<tr><td>URL TARGET : <input class='con7' name='rem_web' value='http://site.com/'></td></tr>
<tr><td><font color=red>INPUT NAMA FILE / SHELL</font></tr></td>
<tr><td><textarea spellcheck='false' class='form-control con7' rows='10' name='tryzzz'>
b374k-2.7.php
WSO-2.7.php
cp.php
function.php
pp.php
x.php
nabilah.php
bilal-ganteng-sekali.php
kontol.php
muslim.php
host.php
403.php
ec.php
fix.php
isd.php
ist.php
indonesia.php
WSO.php
dz.php
cpanelcracker.php
blackshadow.php
sym.php
ftpcracker.php
cpanel.php
cpn.php
sql.php
mysql.php
madspot.php
itsecteam_shell.php
b374k.php
madsopot.php
indishell.php
Cgishell.pl
killer.php
changeall.php
2.php
Sh3ll.php
dz0.php
dam.php
user.php
dom.php
whmcs.php
r00t.php
c99.php
gaza.php
q.php
1.php
id.php
3xp.php
ganteng.php
404.php
cok.php
asu.php
bebeb.php
indo.php
BN-IDBTE4M.php
d0mains.php
madspotshell.php
Sym.php
c22.php
c100.php
Cpanel.php
zone-h.php
cp.php
L3b.php
d.php
admin1.php
upload.php
up.php
uploads.php
sa.php
r57.php
shell.php
sa.php
free.php
lol.php
private.php
bg.php
v.php
</textarea></td></tr>
<tr><td><br /><input type='submit' class='kntd' value='   >> SCAN >>   ' class='input_big' /><br /><br /></td></tr></form></table><br /><br /><hr /><br /><br />
 
<?php
set_time_limit(0);
$rtr=array();
echo "<div id=result><center><table>";
$webz=$_POST['rem_web'];
$uri_in=$_POST['tryzzz'];
$r_xuri = trim($uri_in);
$r_xuri=explode("\n", $r_xuri);
foreach($r_xuri as $rty)
{
$urlzzx=$webz.$rty;
if(function_exists('curl_init'))
{
echo "<tr><td style='text-align:left'><font color=orange>Checking : </font> <font color=7171C6> $urlzzx </font></td>";
$ch = curl_init($urlzzx);
curl_setopt($ch, CURLOPT_NOBODY, true);
curl_exec($ch);
$status_code=curl_getinfo($ch, CURLINFO_HTTP_CODE);
curl_close($ch);
if($status_code==200)
{
echo "<td style='text-align:left'><font color=green> Found....</font></td></tr>";
} else {
echo "<td style='text-align:left'><font color=red>Not Found...</font></td></tr>";
 }
 } else {
echo "<font color=red>cURL Not Found </font>";
} }
echo "</table><br /><br /><hr /><br /><br /></div>";
?>
<br>