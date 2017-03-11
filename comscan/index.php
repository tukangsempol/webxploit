<title>Com_User Scanner</title>
<?php
include("../head.php");
?>

<?php
echo "<body>
<center>
<font color=black size=8>Com_User Scanner</font>
<form method='POST'>
<textarea name='siteshere' class='form-control con7' rows='10'></textarea><br>
<input type='submit' class='kntd' name='scan' value='Scan Sites'><br>
</form>";
        if($_POST['scan'])
        $setanu = explode("",$_POST['siteshere']);
        foreach($sentanu as $bangsatu)
        {
                $curl = curl_init("{$bangsatu}/index.php?option=com_users&view=registration");
                curl_setopt($curl, CURLOPT_FAILONERROR, true);
                curl_setopt($curl, CURLOPT_FOLLOWLOCATION, true);
                curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
                $result = curl_exec($curl);
                        if(eregi("jform_email2-lbl",$result))
                        {
                                echo "<font face='consolas'>
                                <a href='{$bangsatu}/index.php?option=com_users&view=registration' style='text-decoration: none'>{$bangsatu}</a>
                                <font color='gold'>Infected</font></font><br>";
                        }
                        else
                        {
                                echo "<font face='consolas'>{$bangsatu}
                                <font color='green'>Not Infected</font></font><br>";
                        }
        }
        ?>
<br><br>