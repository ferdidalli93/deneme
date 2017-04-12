<?php
session_start();
session_destroy();

include 'baglan.php';
$sil = mysqli_query($baglanti,"DELETE FROM sepet");
	if ($sil) {
		header("Location:index.php");
	}

?>