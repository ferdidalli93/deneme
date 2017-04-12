<?php
include('head.php');
include('header.php');
include('menuler.php');
ob_start();
session_start();

?>


<div class="product-big-title-area">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="product-bit-title text-center">
					<h2>Verilen Tekliflerim</h2>
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
				<form method="post" action="islem.php">
					<table cellspacing="0" class="shop_table cart">
						<thead>
							<tr>
								<th class="product-remove">&nbsp;</th>
								<th class="product-thumbnail">&nbsp;</th>
								<th class="product-name">Ürün</th>
								<th class="product-price">Fiyat</th>                                       
							</tr>
						</thead>

						<tbody>




							<!-- Sepetteki ürünler burda sıralancak -->

							<?php 
							require_once('baglan.php');

							$kadi =$_SESSION['uye_adi'];


							$bul = mysqli_query($baglanti,"select * from teklifler");
							if (mysqli_affected_rows($baglanti)) 
							{
								

								while($row = mysqli_fetch_assoc($bul))
								{
									$urun = $row['teklif_urun'];
									$urunum = mysqli_fetch_assoc(mysqli_query($baglanti,"select * from urunler where urun_id='$urun'"));
									

									
									?> 
									<tr class="cart_item">
										<td class="product-remove">
											<a onclick="return confirm('Emin Misin ?');" title="Remove this item" class="remove" href="teklif_sil.php?teklifid=<?php echo $row['teklif_id']; ?>">×</a>
										</td>

										<td class="product-thumbnail">
											<a href="single-product.html"><img width="145" height="145" alt="poster_1_up" class="shop_thumbnail" src="img/product-thumb-2.jpg"></a>
										</td>

										<td class="product-name">
											<a href="single-product.html"><?php echo $urunum['urun_adi']; ?></a>
										</td>



										<td class="product-subtotal">
											<span class="amount"><?php echo $row['teklif_fiyati'];?>₺</span>
										</td>

									</tr>


									<?php 


								}
							}




							?>




							<!-- Burda bitiyor -->

							
							



						</tbody>





					</table>
				</form>


			</div>
			<div class="col-md-2">
			</div>

		</div>
	</div>
</div>

<?php include('footer.php');?>