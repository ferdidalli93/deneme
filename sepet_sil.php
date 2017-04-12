<?php
	require_once('baglan.php');

	$sid = $_GET['sepetid'];
	$sil = mysqli_query($baglanti,"DELETE FROM sepet where sepet_id = '$sid'");
	if ($sil) {
		header("Location:sepet.php");
	}

?>