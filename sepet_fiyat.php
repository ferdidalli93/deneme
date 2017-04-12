<?php
include "baglan.php";

$query = mysqli_query($baglanti,"SELECT SUM(sepet_toplam) FROM sepet");
$row = mysqli_fetch_array($query);

if ($row['SUM(sepet_toplam)']=="") {
	echo 0;
}
else {
	echo $row['SUM(sepet_toplam)'];
}



?>