<?php
	require_once('baglan.php');

	$sid = $_GET['teklifid'];
	$sil = mysqli_query($baglanti,"DELETE FROM teklifler where teklif_id = '$sid'");
	if ($sil) {
		header("Location:teklifler.php");
	}

?>