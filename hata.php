<html>

<head>
	<meta http-equiv="refresh" content="2;url=shop.php">
	<script src="sweetalert-master/dist/sweetalert.min.js"></script>
	<link rel="stylesheet" href="sweetalert-master/dist/sweetalert.css">
</head>


<body>
	<?php
	session_start();
	$m=$_SESSION['hata'];
	?>

	<script>


		sweetAlert("Hata", '<?php  echo $m; ?>', "error"); 
		
		

	</script>
	



	
</body>

</html>

