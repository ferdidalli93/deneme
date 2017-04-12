<?php
include('head.php');
include('header.php');
include('menuler.php');
?>

<?php
if($_GET['log']=="no")
{
	$msj="Hatalı giriş yaptınız..";
	$renk="#DC143C";
}
?>

<div class="product-big-title-area">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="product-bit-title text-center">
					<h2>Giriş Yap</h2>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="single-product-area">
	<div class="zigzag-bottom"></div>
	<div class="container">
		<div class="row">
			<div class="col-md-4">

			</div>
			
			<div class="col-md-4">
				<div class="product-content-right">
					<div class="woocommerce">

						<div class="panel panel-info">

							<div class="panel-heading text-center">
								<img src="img/login.png">
								
							</div>
							<div class="panel-body">
								<form role="form" method="POST" action="islem.php">
									<div class="col-md-12">
										
										<div class="form-group input-group">
											<span class="input-group-addon"><i class="fa fa-tag"  ></i></span>
											<input type="text" class="form-control" required="" name="uye_kulad" placeholder="Kullanıcı Adı " />
										</div>
										<div class="form-group input-group">
											<span class="input-group-addon"><i class="fa fa-lock"  ></i></span>
											<input type="password" class="form-control" required="" name="uye_sifre" placeholder="Şifre " />
										</div>
										

									</div>

									<div class="col-md-12 text-center">
										<label style='color:<?php echo $renk; ?>;'>
											<?php echo $msj; ?>
										</label>
									</div>
									

									<div class="col-md-4">
										
									</div>
									<div class="col-md-4">
										<button type="submit" class="btn btn-info" name="giris">Giriş</button>
									</div>
								</form>
							</div>
						</div>

					</div>
				</div>
			</div>
		</div>
	</div>
</div>


<?php include('footer.php'); ?>