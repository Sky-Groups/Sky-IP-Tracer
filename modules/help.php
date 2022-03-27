<?php
function help() {
    logo();
    echo <<<EOL
\033[01;37m -----------------------------------------------
|         \033[01;36mKomutlar\033[01;37m       |        \033[01;36mKullanış\033[01;37m      |
 -----------------------------------------------
| \033[01;32mtrace -m\033[01;37m               | \033[01;33mİP'nizi takip edin\033[01;37m   |
| \033[01;32mtrace -t <hedef-ip>\033[01;37m    | \033[01;33mİP izle\033[01;37m              |
| \033[01;32mtrace --help\033[01;37m           | \033[01;33mDaha fazla bilgi için\033[01;37m|
 -----------------------------------------------

\033[01;33m Not :- \033[01;31mip-api, dakikada 150'den fazla istek yapan tüm İP adreslerini otomatik olarak banlar.\033[00m


EOL;
  $prompt="\033[00m";
  echo $prompt;
  $getact = readline(' Sky-IP-Tracer >> ');
  menu();
}
?>
