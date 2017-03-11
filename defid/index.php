<title>DefacerID Mass Notifier</title>
<?php
include("../head.php");
?>

<center><form method='post'>
		<u>Defacer</u>: <br>
		<input type='text' class='con7' name='hekel' size='50' value='NickMu'><br>
		<u>Team</u>: <br>
		<input type='text' class='con7' name='tim' size='50' value='TeamMu'><br>
		<u>Domains</u>: <br>
		<textarea class='form-control con7' rows='10' name='sites'></textarea><br>
		<input type='submit' name='go' value='Submit' class='kntd'>
		</form>
<?php
$site = explode("\r\n", $_POST['sites']);
$go = $_POST['go'];
$hekel = $_POST['hekel'];
$tim = $_POST['tim'];
if($go) {
foreach($site as $sites) {
$zh = $sites;
$form_url = "https://www.defacer.id/notify";
$data_to_post = array();
$data_to_post['attacker'] = "$hekel";
$data_to_post['team'] = "$tim";
$data_to_post['poc'] = 'SQL Injection';
$data_to_post['url'] = "$zh";
$curl = curl_init();
curl_setopt($curl,CURLOPT_URL, $form_url);
curl_setopt($curl,CURLOPT_POST, sizeof($data_to_post));
curl_setopt($curl, CURLOPT_USERAGENT, "Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; SV1; .NET CLR 1.1.4322; .NET CLR 2.0.50727)"); //msnbot/1.0 (+http://search.msn.com/msnbot.htm)
curl_setopt($curl,CURLOPT_POSTFIELDS, $data_to_post);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($curl, CURLOPT_REFERER, 'https://defacer.id/notify.html');
$result = curl_exec($curl);
echo $result;
curl_close($curl);
echo "<br>";
}
}
?>
<br><br>