<title>Admin Finder</title>
<?php
include("../head.php");
?>

<form action="" method="post">
 
<?php
set_time_limit(0);
error_reporting(0);
$list['front'] ="admin
adm
admincp
admcp
cp
modcp
moderatorcp
adminare
admins
cpanel
controlpanel";
$list['end'] = "admin1.php
adm/
_adm_
_admin_
_administrator_
operator
sika
adminweb
develop
ketua
redaktur
author
user
users
dinkesadmin
retel
panel
paneladmin
panellogin
redaksi
cp-admin
Login@web
admin1
admin2
admin3
admin4
admin5
admin6
admin7
admin8
admin9
admin10
master
master/index.php
master/login.php
terasadmin/index.php
terasadmin/login.php
rahasia
rahasia/login.php
rahasia/admin.php
rahasia/index.php
dinkesadmin/login.php
adminpmb
adminpmb/index.php
adminpmb/login.php
system
system/index.php
system/login.php
system/admin.php
webadmin
webadmin/index.php
webadmin/login.php
wpanel
wpanel/index.php
wpanel/login.php
adminpanel
adminpanel/index.php
adminpanel/login.php
adminkec
adminkec/index.php
adminkec/login.php
admindesa
admindesa/index.php
admindesa/login.php
adminkota
adminkota/index.php
adminkota/login.php
admin123
admin123/index.php
admin123/login.php
logout
logout/index.php
logout/login.php
logout/admin.php
adminweb_setting
admin1.html
admin
administrator
admin1.html
admin2.php
admin2.html
yonetim.php
yonetim.html
yonetici.php
yonetici.html
ccms/
ccms/login.php
ccms/index.php
maintenance/
webmaster/
adm/
configuration/
configure/
websvn/
admin/
admin/account.php
admin/account.html
admin/index.php
admin/index.html
admin/login.php
admin/login.html
admin/home.php
admin/controlpanel.html
admin/controlpanel.php
admin.php
admin.html
admin/cp.php
admin/cp.html
cp.php
cp.html
administrator/
administrator/index.html
administrator/index.php
administrator/login.html
administrator/login.php
administrator/account.html
administrator/account.php
administrator.php
administrator.html
login.php
login.html
modelsearch/login.php
moderator.php
moderator.html
moderator/login.php
moderator/login.html
moderator/admin.php
moderator/admin.html
moderator/
account.php
account.html
controlpanel/
controlpanel.php
controlpanel.html
admincontrol.php
admincontrol.html
adminpanel.php
adminpanel.html
admin1.asp
admin2.asp
yonetim.asp
yonetici.asp
admin/account.asp
admin/index.asp
admin/login.asp
admin/home.asp
admin/controlpanel.asp
admin.asp
admin/cp.asp
cp.asp
administrator/index.asp
administrator/login.asp
administrator/account.asp
administrator.asp
login.asp
modelsearch/login.asp
moderator.asp
moderator/login.asp
moderator/admin.asp
account.asp
controlpanel.asp
admincontrol.asp
adminpanel.asp
fileadmin/
fileadmin.php
fileadmin.asp
fileadmin.html
administration/
administration.php
administration.html
sysadmin.php
sysadmin.html
phpmyadmin/
myadmin/
sysadmin.asp
sysadmin/
ur-admin.asp
ur-admin.php
ur-admin.html
ur-admin/
Server.php
Server.html
Server.asp
Server/
wp-admin/
administr8.php
administr8.html
administr8/
administr8.asp
webadmin/
webadmin.php
webadmin.asp
webadmin.html
administratie/
admins/
admins.php
admins.asp
admins.html
administrivia/
Database_Administration/
WebAdmin/
useradmin/
sysadmins/
admin1/
system-administration/
administrators/
pgadmin/
directadmin/
staradmin/
ServerAdministrator/
SysAdmin/
administer/
LiveUser_Admin/
sys-admin/
typo3/
panel/
cpanel/
cPanel/
cpanel_file/
platz_login/
rcLogin/
blogindex/
formslogin/
autologin/
support_login/
meta_login/
manuallogin/
simpleLogin/
loginflat/
utility_login/
showlogin/
memlogin/
members/
login-redirect/
sub-login/
wp-login.php
login1/
dir-login/
login_db/
xlogin/
smblogin/
customer_login/
UserLogin/
login-us/
acct_login/
admin_area/
bigadmin/
project-admins/
phppgadmin/
pureadmin/
sql-admin/
radmind/
openvpnadmin/
wizmysqladmin/
vadmind/
ezsqliteadmin/
hpwebjetadmin/
newsadmin/
adminpro/
Lotus_Domino_Admin/
bbadmin/
vmailadmin/
Indy_admin/
ccp14admin/
irc-macadmin/
banneradmin/
sshadmin/
phpldapadmin/
macadmin/
administratoraccounts/
admin4_account/
admin4_colon/
radmind-1/
Super-Admin/
AdminTools/
cmsadmin/
SysAdmin2/
globes_admin/
cadmins/
phpSQLiteAdmin/
navSiteAdmin/
server_admin_small/
logo_sysadmin/
server/
database_administration/
power_user/
system_administration/
ss_vms_admin_sm/
adminarea/
bb-admin/
adminLogin/
panel-administracion/
instadmin/
memberadmin/
administratorlogin/
admin/admin.php
admin_area/admin.php
admin_area/login.php
siteadmin/login.php
siteadmin/index.php
siteadmin/login.html
admin/admin.html
admin_area/index.php
bb-admin/index.php
bb-admin/login.php
bb-admin/admin.php
admin_area/login.html
admin_area/index.html
admincp/index.asp
admincp/login.asp
admincp/index.html
webadmin/index.html
webadmin/admin.html
webadmin/login.html
admin/admin_login.html
admin_login.html
panel-administracion/login.html
nsw/admin/login.php
webadmin/login.php
admin/admin_login.php
admin_login.php
admin_area/admin.html
pages/admin/admin-login.php
admin/admin-login.php
admin-login.php
bb-admin/index.html
bb-admin/login.html
bb-admin/admin.html
admin/home.html
pages/admin/admin-login.html
admin/admin-login.html
admin-login.html
admin/adminLogin.html
adminLogin.html
home.html
rcjakar/admin/login.php
adminarea/index.html
adminarea/admin.html
webadmin/index.php
webadmin/admin.php
user.html
modelsearch/login.html
adminarea/login.html
panel-administracion/index.html
panel-administracion/admin.html
modelsearch/index.html
modelsearch/admin.html
admincontrol/login.html
adm/index.html
adm.html
user.php
panel-administracion/login.php
wp-login.php
adminLogin.php
admin/adminLogin.php
home.php
adminarea/index.php
adminarea/admin.php
adminarea/login.php
panel-administracion/index.php
panel-administracion/admin.php
modelsearch/index.php
modelsearch/admin.php
admincontrol/login.php
adm/admloginuser.php
admloginuser.php
admin2/login.php
admin2/index.php
adm/index.php
adm.php
affiliate.php
adm_auth.php
memberadmin.php
administratorlogin.php
admin/admin.asp
admin_area/admin.asp
admin_area/login.asp
admin_area/index.asp
bb-admin/index.asp
bb-admin/login.asp
bb-admin/admin.asp
pages/admin/admin-login.asp
admin/admin-login.asp
admin-login.asp
user.asp
webadmin/index.asp
webadmin/admin.asp
webadmin/login.asp
admin/admin_login.asp
admin_login.asp
panel-administracion/login.asp
adminLogin.asp
admin/adminLogin.asp
home.asp
adminarea/index.asp
adminarea/admin.asp
adminarea/login.asp
panel-administracion/index.asp
panel-administracion/admin.asp
modelsearch/index.asp
modelsearch/admin.asp
admincontrol/login.asp
adm/admloginuser.asp
admloginuser.asp
admin2/login.asp
admin2/index.asp
adm/index.asp
adm.asp
affiliate.asp
adm_auth.asp
memberadmin.asp
administratorlogin.asp
siteadmin/login.asp
siteadmin/index.asp
ADMIN/
paneldecontrol/
login/
cms/
admon/
ADMON/
administrador/
ADMIN/login.php
panelc/
ADMIN/login.html";
function template() {
echo '
 
<script type="text/javascript">
<!--
function insertcode($text, $place, $replace)
{
    var $this = $text;
    var logbox = document.getElementById($place);
    if($replace == 0)
        document.getElementById($place).innerHTML = logbox.innerHTML+$this;
    else
        document.getElementById($place).innerHTML = $this;
//document.getElementById("helpbox").innerHTML = $this;
}
-->
</script>
<br>
<br>
<h1 class="technique-two">
 
 
 
</h1>
 
<div class="wrapper">
<div class="red">
<div class="tube">
<center><table class="tabnet"><th colspan="2">Admin Finder</th><tr><td>
<form action="" method="post" name="xploit_form">
 
<tr>
<tr>
    <b><td>URL</td>
    <td><input class="con7" type="text" name="xploit_url" value="'.$_POST['xploit_url'].'" style="width: 350px;" />
    </td>
</tr><tr>
    <td>404 string</td>
    <td><input class="con7" type="text" name="xploit_404string" value="'.$_POST['xploit_404string'].'" style="width: 350px;" />
    </td></b>
</tr><br><td>
<span style="float: center;"><input class="kntd" type="submit" name="xploit_submit" value=" Start Scan" align="center" />
</span></td></tr>
</form></td></tr>
<br /></table>
</div> <!-- /tube -->
</div> <!-- /red -->
<br />
<center>
<div class="green">
<div class="tube" id="rightcol">
Verificat: <span id="verified">0</span> / <span id="total">0</span><br />
<b>Found ones:<br /></b>
</div> <!-- /tube -->
</div><!-- /green -->
<br clear="all" /><br />
<div class="blue">
<div class="tube" id="logbox">
<br />
<br />
Admin page Finder :<br /><br />
</div> <!-- /tube -->
</div> <!-- /blue -->
</div> <!-- /wrapper -->
<br clear="all"><br>';
}
function show($msg, $br=1, $stop=0, $place='logbox', $replace=0) {
    if($br == 1) $msg .= "<br />";
    echo "<script type=\"text/javascript\">insertcode('".$msg."', '".$place."', '".$replace."');</script>";
    if($stop == 1) exit;
    @flush();@ob_flush();
}
function check($x, $front=0) {
    global $_POST,$site,$false;
    if($front == 0) $t = $site.$x;
    else $t = 'http://'.$x.'.'.$site.'/';
    $headers = get_headers($t);
    if (!eregi('200', $headers[0])) return 0;
    $data = @file_get_contents($t);
    if($_POST['xploit_404string'] == "") if($data == $false) return 0;
    if($_POST['xploit_404string'] != "") if(strpos($data, $_POST['xploit_404string'])) return 0;
    return 1;
}
 
// --------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
template();
if(!isset($_POST['xploit_url'])) die;
if($_POST['xploit_url'] == '') die;
$site = $_POST['xploit_url'];
if ($site[strlen($site)-1] != "/") $site .= "/";
if($_POST['xploit_404string'] == "") $false = @file_get_contents($site."d65897f5380a21a42db94b3927b823d56ee1099a-this_can-t_exist.html");
$list['end'] = str_replace("\r", "", $list['end']);
$list['front'] = str_replace("\r", "", $list['front']);
$pathes = explode("\n", $list['end']);
$frontpathes = explode("\n", $list['front']);
show(count($pathes)+count($frontpathes), 1, 0, 'total', 1);
$verificate = 0;
foreach($pathes as $path) {
    show('Checking '.$site.$path.' : ', 0, 0, 'logbox', 0);
    $verificate++; show($verificate, 0, 0, 'verified', 1);
    if(check($path) == 0) show('not found', 1, 0, 'logbox', 0);
    else{
        show('<span style="color: #000000;"><strong>found</strong></span>', 1, 0, 'logbox', 0);
        show('<a href="'.$site.$path.'">'.$site.$path.'</a>', 1, 0, 'rightcol', 0);
    }
}
preg_match("/\/\/(.*?)\//i", $site, $xx); $site = $xx[1];
if(substr($site, 0, 3) == "www") $site = substr($site, 4);
foreach($frontpathes as $frontpath) {
    show('Checking http://'.$frontpath.'.'.$site.'/ : ', 0, 0, 'logbox', 0);
    $verificate++; show($verificate, 0, 0, 'verified', 1);
    if(check($frontpath, 1) == 0) show('not found', 1, 0, 'logbox', 0);
    else{
        show('<span style="color: #000000;"><strong>found</strong></span>', 1, 0, 'logbox', 0);
        show('<a href="http://'.$frontpath.'.'.$site.'/">'.$frontpath.'.'.$site.'</a>', 1, 0, 'rightcol', 0);
  }
 
}
?>