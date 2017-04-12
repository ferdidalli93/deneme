<?php
include('head.php');
include('header.php');
include('menuler.php');
ob_start();
session_start();

?>

<!-- End mainmenu area -->

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


            <?php
            require_once('baglan.php');
            $sonuc = mysqli_query($baglanti,"select * from urunler");

            if (mysqli_num_rows($sonuc)!=0) 
            {
                while ($row = mysqli_fetch_assoc($sonuc)) 
                {

                   ?> 
                   <form method="POST" action="sepete_ekle.php">
                    <div class='col-md-2 col-sm-7'>                     
                        <div class='single-shop-product'>
                            <div class='product-upper'>
                                <img src=<?php echo $row['urun_bresim']; ?> alt=''>
                            </div>
                            <h4><a>Ürün Satan Kişi: </a><a><?php echo $row['urun_satan_kisi']; ?></a></h4>
                            <h2><a href="urun_detay.php?urunid=<?php echo $row['urun_id'];?>"><?php echo $row['urun_adi']; ?></a></h2>
                            <div class='product-carousel-price'>
                                <ins><?php echo $row['urun_indirimli_fiyat'];?>₺</ins> <del><?php echo $row['urun_fiyat'];?>₺</del>
                            </div>

                            <div class='product-carousel-price'>
                                <input type="tex" name="adet" value="1"/>
                            </div>
                            <div class='product-carousel-price'>
                            <h4><a>Son Teklif Saati: </a><a><?php echo $row['urun_teklif_saati']; ?></a></h4>
                                
                            </div>
                            <div class='product-option-shop'>   
                                <input type="hidden" name='urunidisi' value="<?php echo $row['urun_id']?>" />
                                <button id="ekle" type="submit" name="add-to-cart" class="add_to_cart_button">Sepete Ekle</button>

                            </div>
                        </div>
                    </div>
                </form>
                <?php   

            }
        }

       

        ?>

        


    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="product-pagination text-center">
                <nav>
                    <ul class="pagination">
                        <li>
                            <a href="#" aria-label="Previous">
                                <span aria-hidden="true">&laquo;</span>
                            </a>
                        </li>
                        <li><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li><a href="#">5</a></li>
                        <li>
                            <a href="#" aria-label="Next">
                                <span aria-hidden="true">&raquo;</span>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</div>
</div>

<?php
include('footer.php');
?>