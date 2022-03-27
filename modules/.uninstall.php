<?php
include("modules/system.php");
class un {
  public function uni() {
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
 }\033[01;31m------------- \033[01;32mİP Konumunu İzle\033[01;31m -------------\033[01;37m{
    }\033[01;31m--------------------------------------\033[01;37m{

\033[00m
EOL;

    if (file_exists("/usr/bin/sky-ip-tracer")) {
      echo "\n\033[01;31m        Maalesef Sky-IP-Tracer kaldırılamadı !!!\033[00m\n";
    } else if(file_exists("/data/data/com.termux/files/usr/bin/sky-ip-tracer")) {
      echo "\n\033[01;31m        Maalesef Sky-IP-Tracer kaldırılmadı !!!\033[00m\n";
    } else {
      echo "\n\033[01;32m        Sky-IP-Tracer kaldırıldı !!!\033[00m\n";
    }
  }
}
$a=new un;
$a->uni();
$a->logo();
?>
