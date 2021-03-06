<?php
include("modules/system.php");
class set {
  public function Setup() {
    global $system;
    // removing old files
    if ($system=="termux") {
      system("rm -rf /data/data/com.termux/files/usr/share/Sky-IP-Tracer");
      system("rm -rf /data/data/com.termux/files/usr/bin/sky-ip-tracer");
      system("rm -rf /data/data/com.termux/files/usr/bin/trace");
    } elseif ($system=="ubuntu") {
      system("sudo rm -rf /usr/bin/sky-ip-tracer");
      system("sudo rm -rf /usr/bin/trace");
      system("sudo rm -rf /usr/share/Sky-IP-Tracer");
    } else {
      system("rm -rf /usr/bin/sky-ip-tracer");
      system("rm -rf /usr/bin/trace");
      system("rm -rf /usr/share/Sky-IP-Tracer");
    }
    
    // adding bin file
    if ($system=="termux") {
      system("mv -v modules/sky-ip-tracer /data/data/com.termux/files/usr/bin/");
      system("mv -v modules/trace /data/data/com.termux/files/usr/bin/");
      system("chmod +x /data/data/com.termux/files/usr/bin/sky-ip-tracer trace");
      system("chmod +x /data/data/com.termux/files/usr/bin/trace");
    } elseif ($system=="ubuntu") {
      system("sudo mv -v modules/sky-ip-tracer /usr/bin/");
      system("sudo mv -v modules/trace /usr/bin/");
      system("sudo chmod +x /usr/bin/sky-ip-tracer");
      system("sudo chmod +x /usr/bin/trace");
    } else {
      system("mv -v modules/sky-ip-tracer /usr/bin/");
      system("mv -v modules/trace /usr/bin/");
      system("chmod +x /usr/bin/sky-ip-tracer");
      system("chmod +x /usr/bin/trace");
    }

    // copy files from Sky-IP-Tracer to .Sky-IP-Tracer directory.
    if ($system=="termux") {
      system("mkdir /data/data/com.termux/files/usr/share/Sky-IP-Tracer");
      system("chmod +x * *.* .*.*");
      system("mv -v * *.* .*.* /data/data/com.termux/files/usr/share/Sky-IP-Tracer/");
    } elseif ($system=="ubuntu") {
      system("sudo mkdir /usr/share/Sky-IP-Tracer/");
      system("sudo chmod +x * *.* .*.*");
      system("sudo mv -v * *.* .*.* /usr/share/Sky-IP-Tracer/");
    } else {
      system("mkdir /usr/share/Sky-IP-Tracer");
      system("chmod +x * *.* .*.*");
      system("mv -v * *.* .*.* /usr/share/Sky-IP-Tracer/");
    }
    
    // removing Sky-IP-Tracer directory
    if ($system=="termux") {
      system("cd .. && rm -rf Sky-IP-Tracer");
    } elseif ($system=="ubuntu") {
      system("cd .. && sudo rm -rf Sky-IP-Tracer");
    } else {
      system("cd .. && rm -rf Sky-IP-Tracer");
    }
  }
  function logo() {
    system("clear");
    echo <<<EOL
\033[01;33m


\033[01;31m      _\033[01;33m ____    _
     \033[01;31m(_)\033[01;33m  _ \  | |_ _ __ __ _  ___ ___ _ __
     | | |_) | | __| '__/ _` |/ __/ _ \ '__|
     | |  __/  | |_| | | (_| | (_|  __/ |
     |_|_|      \__|_|  \__,_|\___\___|_|


    \033[01;37m}\033[01;31m--------------------------------------\033[01;37m{
 }\033[01;31m------------- \033[01;32m??P Konumunu ??zle\033[01;31m -------------\033[01;37m{
    }\033[01;31m--------------------------------------\033[01;37m{

\033[00m
EOL;

    if (file_exists("/usr/bin/ip-tracer") || file_exists("/data/data/com.termux/files/usr/bin/ip-tracer")) {
      echo "\033[01;32m      IP-Tracer installed Successfully !!!\033[00m\n";
      echo <<<EOL

\033[01;37m ----------------------------------------------
|         \033[01;36mKomutlar\033[01;37m      |        \033[01;36mKullan????\033[01;37m      |
 ----------------------------------------------
| \033[01;32mtrace -m\033[01;37m              | \033[01;33m??P'nizi takip edin\033[01;37m   |
| \033[01;32mtrace -t <hedef-ip>\033[01;37m   | \033[01;33m??P izle\033[01;37m              |
| \033[01;32mtracer --help\033[01;37m         | \033[01;33mDaha fazla bilgi i??in\033[01;37m|
 ----------------------------------------------

\033[01;31mNote :- ip-api, dakikada 150'den fazla istek yapan t??m IP adreslerini otomatik olarak banlar.\033[00m


EOL;
    } else {
      echo "\n\n\033[01;31m  Maalesef Sky-IP-Tracer y??klenemedi !!!\033[00m";
    }
  }
}
$a=new set;
$a->Setup();
$a->logo();
?>
