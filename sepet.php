<?php
include('head.php');
include('header.php');
include('menuler.php');

?>
<?php 
ob_start();
session_start();

if($_GET['grs']=="no")
{
    $msj="Lütfen giriş yapınız..";
    $renk="#DC143C";
} 
?>



<div class="product-big-title-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="product-bit-title text-center">
                    <h2>Alışveriş Sepeti</h2>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Page title area -->


<div class="single-product-area">
    <div class="zigzag-bottom"></div>
    <div class="container">
        <div class="row">
            <?php include('urun_arama.php'); ?>

            <div class="col-md-8">
                <div class="product-content-right">
                    <div class="woocommerce">
                        <form method="post" action="islem.php">
                            <table cellspacing="0" class="shop_table cart">
                                <thead>
                                    <tr>
                                        <th class="product-remove">&nbsp;</th>
                                        <th class="product-thumbnail">&nbsp;</th>
                                        <th class="product-name">Ürün</th>
                                        <th class="product-name">Adet</th>
                                        <th class="product-price">Fiyat</th>                                       
                                    </tr>
                                </thead>

                                <tbody>




                                    <!-- Sepetteki ürünler burda sıralancak -->

                                    <?php 
                                    require_once('baglan.php');

                                    $kadi =$_SESSION['uye_adi'];

                                    
                                    $bul = mysqli_query($baglanti,"select * from sepet");
                                    if (mysqli_affected_rows($baglanti)) 
                                    {
                                            $toplam = 0 ;
                                                
                                        while($row = mysqli_fetch_assoc($bul))
                                        {
                                            $urun = $row['sepet_urun'];
                                            $urunum = mysqli_fetch_assoc(mysqli_query($baglanti,"select * from urunler where urun_id='$urun'"));
                                            $_SESSION['sepet_adet'] = $row['sepet_adet'];
                                           

                                            ?> 
                                            <tr class="cart_item">
                                                <td class="product-remove">
                                                    <a onclick="return confirm('Emin Misin ?');" title="Remove this item" class="remove" href="sepet_sil.php?sepetid=<?php echo $row['sepet_id']; ?>">×</a>
                                                </td>

                                                <td class="product-thumbnail">
                                                    <a href="urun_detay.php?urunid=<?php echo $urunum['urun_id']?>"><img width="145" height="145" alt="poster_1_up" class="shop_thumbnail" src="img/product-thumb-2.jpg"></a>
                                                </td>

                                                <td class="product-name">
                                                    <a href="urun_detay.php?urunid=<?php echo $urunum['urun_id']?>"><?php echo $urunum['urun_adi']; ?></a>
                                                </td>
                                                <td class="product-name">
                                                    <a><?php echo $row['sepet_adet']; ?></a>
                                                </td>


                                                <td class="product-subtotal">
                                                    <span class="amount"><?php echo $toplam = $row['sepet_adet'] * $urunum['urun_indirimli_fiyat'];?>₺</span>
                                                </td>

                                            </tr>


                                            <?php 


                                        }
                                    }
                                    



                                    ?>




                                    <!-- Burda bitiyor -->

                                    <tr>
                                        <td class="actions" colspan="6">
                                            <input type="submit" value="Sepeti Güncelle" name="update_cart" class="button">
                                            <input type="submit" value="Ödemeye Devam" name="proceed" class="checkout-button button alt wc-forward">


                                        </td>


                                    </tr>
                                    <tr>
                                        <td colspan="6">
                                            <a href="giris.php">
                                                <?php echo $msj;?>
                                            </a>
                                        </td>
                                    </tr>



                                </tbody>





                            </table>
                        </form>


                        <div class="cart-collaterals">


                            <div class="cross-sells">
                                
                            </div>


                            <div class="cart_totals ">
                                <h2>SEPET TOPLAMLARI</h2>

                                <table cellspacing="0">
                                    <tbody>
                                        <tr class="order-total">
                                            <th>Sipariş Toplamı</th>
                                            <td><strong><span class="amount">
                                                <?php 
                                                include "sepet_fiyat.php";

                                                ?>

                                                ₺</span></strong> </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>




                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <?php include('footer.php'); ?>