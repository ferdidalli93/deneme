<?php
ob_start();
session_start();



$username="root";
$password="root";
$host="localhost";
$database="e-ticaret";

$baglanti=mysqli_connect($host,$username,$password,$database);
mysqli_query($baglanti,"SET NAMES UTF8");

if(!$baglanti)
{
    echo "Bağlantı hatası:".mysqli_errno();
    exit();
}

$db=mysqli_select_db($baglanti,$database);
if(!$db) {
    echo "Veritabanı hatası: ".mysqli_error(); echo "<br>";
    exit();
}