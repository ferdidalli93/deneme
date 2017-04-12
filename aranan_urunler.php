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
                    <h2>Alışveriş</h2>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="single-product-area">
    <div class="zigzag-bottom"></div>
    <div class="container">
        <div class="row">
            <?php include('urun_arama.php'); ?>

            <div class="single-sidebar">
            <div class="col-md-4">
				<h2 class="sidebar-title">Ürünler</h2>

		<?php
		require_once('baglan.php');
		if($_POST['arancak']!='')
		{

		$urunadi="%".$_POST['arancak']."%";
		$bul = mysqli_query($baglanti,"SELECT * FROM urunler WHERE urun_adi LIKE '$urunadi'");

		if (mysqli_num_rows($bul)!=0) 
                    {
                        while ($row = mysqli_fetch_assoc($bul)) 
                        {

		?>


		<div class="thubmnail-recent">
			<img src="<?php echo $row['urun_kresim_1']; ?>" class="recent-thumb" alt="">
			<h2><a href="urun_detay.php?urunid=<?php echo $row['urun_id'];?>"><?php echo $row['urun_adi']; ?></a></h2>
			<div class="product-sidebar-price">
				<ins><?php echo $row['urun_indirimli_fiyat']; ?>₺</ins> <del><?php echo $row['urun_fiyat']; ?>₺</del>
			</div>
		</div>

		<?php
						}
					}
		}


		?>


		


			</div>

			</div>            
        </div>
    </div>
</div>

<?php include('footer.php'); ?>