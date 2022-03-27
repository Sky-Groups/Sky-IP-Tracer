<?php
include("modules/trm.php");
include("modules/help.php");
include("modules/trip.php");

function logo() {
  system("clear");
  echo <<<EOL
\033[01;33m


\033[01;31m      _\033[01;33m ____    _
     \033[01;31m(_)\033[01;33m  _ \  | |_ _ __ __ _  ___ ___ _ __
     | | |_) | | __| '__/ _` |/ __/ _ \ '__|
     | |  __/  | |_| | | (_| | (_|  __/ |
     |_|_|      \__|_|  \__,_|\___\___|_|


   \033[01;37m}\033[01;31m----------------------------------------\033[01;37m{
}\033[01;31m-------------- \033[01;32mİP Konum İzleme\033[01;31m --------------\033[01;37m{
   }\033[01;31m----------------------------------------\033[01;37m{

\033[00m
EOL;
}

function About() {
  logo();
  echo <<<EOL

         \033[01;33mTool Name \033[01;37m:- \033[01;36mSky-IP-Tracer
         \033[01;33mAuthor \033[01;37m:- \033[01;36mEgehan Gökden
         \033[01;33mPowered By \033[01;37m:- \033[01;36mSky Groups

 \033[01;33mSky-IP-Tracer\033[01;32m Kullanımı \033[01;36mip-api \033[01;32mHerhangi bir ip adresi bilgisini almak için. Sistemimiz, dakikada 150'den fazla istek yapan tüm IP adreslerini otomatik olarak yasaklayacaktır.\033[00m


EOL;
  $getact = readline('  Sky-IP-Tracer >> ');
  menu();
}

function upd() {
  logo();
  echo "\n\033[01;32mYükleniyor Sky-IP-Tracer.........\033[01;37m\n\n";
  sleep(1);
  system("cd ~/ && git clone https://github.com/Sky-Groups/Sky-IP-Tracer");
  system("cd ~/ && sudo git clone https://github.com/Sky-Groups/Sky-IP-Tracer");
  system("cd ~/Sky-IP-Tracer && sh install");
  logo();
  echo "\n\033[01;32m              Sky-IP-Tracer Yüklendi !!!\033[01;37m\n";
  sleep(1);
  menu();
}

function menu() {
  logo();
  echo "   \033[01;32m[ \033[01;37m1 \033[01;32m] \033[01;33mİP Adresini İzle.\n";
  echo "   \033[01;32m[ \033[01;37m2 \033[01;32m] \033[01;33mİP Adresinizi Takip Edin.\n";
  echo "   \033[01;32m[ \033[01;37m3 \033[01;32m] \033[01;33mHakkımızda.\n";
  echo "   \033[01;32m[ \033[01;37m4 \033[01;32m] \033[01;33mYardım.\n";
  echo "   \033[01;32m[ \033[01;37m5 \033[01;32m] \033[01;33mSky-İP-Tracer'i Güncelle.\n";
  echo "   \033[01;32m[ \033[01;37mx \033[01;32m] \033[01;33mÇıkış \n\n\033[00m";
  $inp = readline('  Sky-IP-Tracer >> ');
  if ($inp=="x" || $inp=="exit") {
    echo "\n\033[01;31m  Kapatılıyor .......\033[00m\n";
    sleep(1);
    echo "\033[01;32m  Au revoir ....... :)\n\n\033[00m";
    exit();
  } else if ($inp=="1") {
    trac();
  } else if ($inp=="2") {
    tracm();
  } else if ($inp=="3") {
    About();
  } else if ($inp=="4") {
    help();
  } else if ($inp=="5") {
    upd();
  } else {
    echo "\n  \033[01;31mErr : Bilinmeyen Komut \033[01;32m'$inp'\033[00m";
    sleep(1);
    menu();
  }
}
menu();
?>
