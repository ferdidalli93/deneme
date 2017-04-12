<?php
ob_start();
session_start();

 if ($_SESSION['uye_adi']=="") 
   	{
   		header("Location:giris.php");
   	}
   
include('head.php');
include('header.php');
include('menuler.php');


?>


<div class="product-big-title-area">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="product-bit-title text-center">
					<h2>Ürün Ekleme</h2>
				</div>
			</div>
		</div>
	</div>
</div>



<div class="single-product-area">
	<div class="zigzag-bottom"></div>
	<div class="container">
		<div class="row">

			<div class="col-md-6">
				<div class="panel panel-default">
					<div class="panel-heading">
						<h2 class="text-center">Ürün Ekleme</h2>
					</div>
					<div class="panel-body">
					<form method="POST" action="islem.php">

						<div class="form-group">
							<label class="control-label col-lg-4">Ürünün Adı:</label>
							<input class="form-control" required="" type="text" name="urun_adi">

						</div>
						<div class="form-group">
							<label class="control-label col-lg-4">Fiyatı:</label>
							<input class="form-control" required="" type="text" name="urun_fiyati">

						</div>
						<div class="form-group">
							<label class="control-label col-lg-4">İndirimli Fiyatı:</label>
							<input class="form-control" required="" type="text" name="urun_indirimli_fiyati">

						</div>
						<div class="form-group">
							<label class="control-label col-lg-4">Ürün Açıklaması:</label>
							<input class="form-control" required="" type="text" name="urun_aciklama">

						</div>
						<div class="form-group">
							<label class="control-label col-lg-4">Ürünün Resmi(25x25)</label>
							<input class="form-control" required="" type="file" name="urun_bresim">

						</div>
						<div class="form-group">
							<label class="control-label col-lg-4">Ürünün Resmi(15x15)</label>
							<input class="form-control" type="file" name="urun_kresim_1">

						</div>
						<div class="form-group">
							<label class="control-label col-lg-4">Ürünün Resmi(15x15)</label>
							<input class="form-control" type="file" name="urun_kresim_2">

						</div>
						<div class="form-group">
							<label class="control-label col-lg-4">Ürünün Resmi(15x15)</label>
							<input class="form-control" type="file" name="urun_kresim_3">

						</div>
						<div class="form-group">
							<label class="control-label col-lg-4">Ürünün Resmi(15x15)</label>
							<input class="form-control"  type="file" name="urun_kresim_4">

						</div>

						<div class="col-md-8">
							<button type="submit" id="urun_ekle" class="btn btn-info" name="urun_ekle">Ekle</button>	
						</div>

						</form>
					</div>
				</div>


			</div>





		</div>

	</div>
</div>














<?php include('footer.php');?>