<?php
error_reporting(E_ALL & ~E_NOTICE);
//ini_set('auto_detect_line_endings', TRUE);
date_default_timezone_set("Asia/Jakarta");

$webhost = "www.websekolah.sch.id";
$webmail = "admin@websekolah.sch.id";
$nmsekolah = "SMA Negeri 4 Bandung";
$almtsekolah = "Jalan Gardujati No.20 Telp.022-6011186 Bandung";
$jum_spp="125000";
$jum_dsp="3000000";

$dbhost = "localhost";
$dbuser = "root";
$dbpasswd = "";
$dbname = "db_sekolah";

$dbprefix  = "t_";
$alan = "../temp/art-alan/";
$email1 = "alanrm82";
$email2 = "";
$noacak = "82";
$kolom="3";
$versi="3.5";
$folderadmin="admin";
$multibahasa="tidak"; // diisi "ya" apabila akan dijadikan multi bahasa dan 
//diisi "tidak" apabila tidak akan mengaktifkan multibahasa
$nmhost = "http://localhost/webtemp/";
// konfigurasi ID aplikasi Facebook
$appid  = ''; // contoh  169993669711223
$secret = ''; // contoh 81158039568d1a5f8d7990b23232
?>