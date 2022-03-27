<?php
function tracm() {
$data = @unserialize(file_get_contents('http://ip-api.com/php/'));
$FCL="\033[01;33m";
$MCL="\033[01;37m>\033[01;32m";
$NCL="\033[00m";
date_default_timezone_set($data['timezone']);
system("clear");
  echo <<<EOL
\033[01;33m


\033[01;31m      _\033[01;33m ____    _
     \033[01;31m(_)\033[01;33m  _ \  | |_ _ __ __ _  ___ ___ _ __
     | | |_) | | __| '__/ _` |/ __/ _ \ '__|
     | |  __/  | |_| | | (_| | (_|  __/ |
     |_|_|      \__|_|  \__,_|\___\___|_|


   \033[01;37m}\033[01;31m----------------------------------------\033[01;37m{
}\033[01;31m--------------- \033[01;32mİP Bilgileri\033[01;31m ---------------\033[01;37m{
   }\033[01;31m----------------------------------------\033[01;37m{

\033[00m
EOL;

if($data['status'] == 'success') {
  echo "\n ".$FCL."İP Adresi                  ".$MCL."   ".$data['query'];
  echo "\n ".$FCL."Ülke                       ".$MCL."   ".$data['country'];
  echo "\n ".$FCL."Ülke Kodu                  ".$MCL."   ".$data['countryCode'];
  echo "\n ".$FCL."Şehir                      ".$MCL."   ".$data['city'];
  echo "\n ".$FCL."İlçe                       ".$MCL."   ".$data['regionName'];
  echo "\n ".$FCL."Plaka Kodu                 ".$MCL."   ".$data['region'];
  echo "\n ".$FCL."Posta Kodu                 ".$MCL."   ".$data['zip'];
  echo "\n ".$FCL."Tarih & Saat               ".$MCL."   ".date("F j, Y, g:i a");
  echo "\n ".$FCL."Zaman Dilimi               ".$MCL."   ".$data['timezone'];
  echo "\n ".$FCL."İnternet Servis Sağlayıcısı".$MCL."   ".$data['isp'];
  echo "\n ".$FCL."Organizasyon               ".$MCL."   ".$data['org'];
  echo "\n ".$FCL."İnternet Şirketi           ".$MCL."   ".$data['as'];
  echo "\n ".$FCL."Enlem                      ".$MCL."   ".$data['lat'];
  echo "\n ".$FCL."Boylam                     ".$MCL."   ".$data['lon'];
  echo "\n ".$FCL."Tahmini Lokasyon           ".$MCL."   ".$data['lat'].",".$data['lon'];
echo "\n\n$NCL";
} else {
  echo "\n\033[01;31m Maalesef verilen ip\033[01;33m Geçersiz \033[01;31m !!!\033[00m\n";
  echo "\033[01;31m İnternet bağlantınızı \033[01;33m Kontrol edin \033[01;31m !!!\033[00m\n";
  echo "\033[01;31m Eğer \033[01;33m Çevrimiçiyseniz \033[01;31m İP adresinizi \033[01;33m Kontrol edin \033[01;31m !!!\033[00m\n\n";
}
}
tracm();
?>
