<?php
ob_start();
if(isset($_POST['adsoyad']) && isset($_POST['konu_baslik']) && isset($_POST['telefon']) && isset($_POST['adres']) && isset($_POST['email'])&& isset($_POST['mesaj'])) 
{
	
	$adsoyad = strip_tags($_POST['adsoyad']);
	$konu_baslik = strip_tags($_POST['konu_baslik']);
	$telefon = strip_tags($_POST['telefon']);
	$adres = strip_tags($_POST['adres']);
	$mesaj = strip_tags($_POST['mesaj']);
	$eposta = strip_tags($_POST['email']);

	$icerik = 'Ad Soyad: ' . $adsoyad . '<br/>Telefon: '. $telefon . '<br/>E-Posta: '. $eposta . '<br/>Adres: '. $adres . '<br/>' . $mesaj;
	mail('ferdidalli93@gmail.com', $konu_baslik, $icerik);
	echo 'Mesajınız Gönderildi! Teşekkürler.';
	header('refresh: 2 ;index.php');
}
else 
{
	echo 'Lütfen Formu Kullanın!';
}
ob_flush();
?>