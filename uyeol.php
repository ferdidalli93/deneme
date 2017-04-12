<?php
include('head.php');
include('header.php');
include('menuler.php');
?>

<div class="product-big-title-area">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="product-bit-title text-center">
					<h2>Üye Ol</h2>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="single-product-area">
	<div class="zigzag-bottom"></div>
	<div class="container">
		<div class="row">
			<div class="col-md-2">


			</div>
			
			<div class="col-md-8">
				<div class="product-content-right">
					<div class="woocommerce">

						<div class="panel panel-info">
							<div class="panel-heading">
								Yeni Üyelik
							</div>
							<div class="panel-body">
								<form role="form" method="POST" action="islem.php">
									<div class="col-md-6">

										<div class="form-group">
											<label>Ad</label>
											<input class="form-control" required="" type="text" name="uye_adi">
											
										</div>
										<div class="form-group">
											<label>Kullanıcı Adı</label>
											<input class="form-control" required="" type="text" name="uye_kulad">
											
										</div>
										<div class="form-group">
											<label>E mail</label>
											<input class="form-control" required="" type="text" name="uye_email">
											
										</div>

									</div>
									<div class="col-md-6">
										<div class="form-group">
											<label>Soyad</label>
											<input class="form-control" required="" type="text" name="uye_soyadi">
											
										</div>
										<div class="form-group">
											<label>Şifre</label>
											<input class="form-control" required="" type="text" name="uye_sifre">
										</div>

									</div>

									<div class="col-md-12">
										<button type="submit" class="btn btn-info" name="uye_kayitol">Üye Ol</button>
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