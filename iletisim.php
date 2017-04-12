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
					<h2>İletişim</h2>
				</div>
			</div>
		</div>
	</div>
</div>



<div class="single-product-area">
	<div class="zigzag-bottom"></div>
	<div class="container">
		<div class="row">

			<form action="mail.php" method="POST">
				<div class="col-md-6">
					<h2>Bize Ulaşın</h2>
					<p>Aşağıdaki formu doldurarak sorularınızı bize iletebilirsiniz.En kısa sürede size yanıt verilecektir. Dilerseniz sitemize üye olarak sorularınızı ve verilen cevapları daha düzenli takip edebilirsiniz.
						<b>Koyu renkli</b> yazılmış alanların doldurulması zorunludur.</p>
					</div>
					<div class="col-md-8">

					</div>
					<div class="col-md-6">
						<div class="product-content-right">

							<div class="form-group">
								<label>Ad Soyad</label>
								<input class="form-control" required="" type="text" name="adsoyad">

							</div>

							<div class="form-group">
								<label>Mesaj Konusu</label>
								<select class="form-control">
									<option>Mesaj Konusu Seçiniz</option>
									<option>Kredi Kartı / Havale İşlemleri</option>
									<option>Sipariş</option>
									<option>Satış Sonrası(İade/Arıza)</option>
									<option>Ürünlerimiz Hakkında</option>
									<option>Web Sitemiz Hakkında</option>
									<option>Mağazalarımız Hakkında</option>
								</select>
							</div>
							<div class="form-group">
								<label>Konu Başlığı</label>
								<input class="form-control" required="" type="text" name="konu_baslik">

							</div>
							<div class="form-group">
								<label>İletişim Telefonu</label>
								<input class="form-control" required="" type="text" name="telefon">

							</div>
							<div class="form-group">
								<label>Adres</label>
								<input class="form-control" required="" type="text" name="adres">

							</div>
							<div class="form-group">
								<label>E mail</label>
								<input class="form-control" required="" type="text" name="email">

							</div>
							<div class="form-group">
								<label for="comment">Mesajınız</label>
								<textarea class="form-control" rows="5" name="mesaj"></textarea>
							</div>
						</div>



					</div>
					<div class="col-md-8">
						<button type="submit" id="msj_gonder" class="btn btn-info" name="msj_gonder">Gönder</button>	
					</div>
				</form>




			</div>

		</div>
	</div>




























	<?php include('footer.php'); ?>