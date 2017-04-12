<?php
include "baglan.php";
$query = mysqli_query($baglanti,"SELECT Count(sepet_id) FROM sepet");
$row = mysqli_fetch_array($query);

if ($row['Count(sepet_id)']=="") {
	echo 0;
}
else {
	echo $row['Count(sepet_id)'];
}
?>