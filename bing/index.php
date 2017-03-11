<title>Bing Dorker</title>
<?php
include("../head.php");
?>


<center><form method="post">
<font color=red>Bing Dork: <input class="con7" type="text" name="dork" placeholder="dork" required>
<input class='kntd' type="submit" name="go" value=">>">
</form>
<?php
// coded by Mr. Magnom 
// Re-Coded to Web Based by Mr. Error 404 - IndoXploit
// greetz to Mr. Magnom - Sanjungan Jiwa
function getsource($url, $proxy) {
    $curl = curl_init($url);
    curl_setopt($curl, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
    if($proxy) {
        $proxy = explode(':', autoprox());
        curl_setopt($curl, CURLOPT_PROXY, $proxy[0]);
        curl_setopt($curl, CURLOPT_PROXYPORT, $proxy[1]);
    }
    $content = curl_exec($curl);
    curl_close($curl);
    return $content;
}
$dork = htmlspecialchars($_POST['dork']);
$do = urlencode($dork);
if(isset($_POST['go'])) {
	$npage = 1;
	$npages = 30000;
	$allLinks = array();
	$lll = array();
	while($npage <= $npages) {
	    $x = getsource("http://www.bing.com/search?q=".$do."&first=".$npage."", $proxy);
	    if($x) {
	        preg_match_all('#<h2><a href="(.*?)" h="ID#', $x, $findlink);
	        foreach ($findlink[1] as $fl) array_push($allLinks, $fl);
	        $npage = $npage + 10;
	        if (preg_match("(first=" . $npage . "&amp)siU", $x, $linksuiv) == 0) break;
	    } else break;
	}
	$URLs = array();
	foreach($allLinks as $url){
	    $exp = explode("/", $url);
	    $URLs[] = $exp[2];
	}
	$array = array_filter($URLs);
	$array = array_unique($array);
	$sss = count(array_unique($array));
	echo "ToTaL SiTe : $sss<br>";
	foreach($array as $domain) {
		echo "http://$domain/<br>";
	}
}
        ?>
<br><br>