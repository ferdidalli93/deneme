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

            <div class="col-md-8">
                <div class="product-content-right">
                    <div class="product-breadcroumb">

                    </div>
                    <?php
                    require_once('baglan.php');
                    $urungelenid=$_GET['urunid'];
                    $bul = mysqli_query($baglanti,"select * from urunler where urun_id='$urungelenid'");
                    $enyuksek = mysqli_query($baglanti,"SELECT * FROM teklifler WHERE teklif_urun='$urungelenid' ORDER BY teklif_fiyati DESC LIMIT 1");
                    $cek = mysqli_fetch_assoc($enyuksek);


                    if (mysqli_num_rows($bul)!=0) 
                    {
                        while ($row = mysqli_fetch_assoc($bul)) 
                        {

                         ?> 
                         <form method="POST" action="sepete_ekle.php">
                             <div class="row">
                                <div class="col-sm-6">
                                    <div class="product-images">
                                        <div class="product-main-img">
                                            <img src="<?php echo $row['urun_bresim'] ?>" alt="">
                                        </div>

                                        <div class="product-gallery">
                                            <img src="<?php echo $row['urun_kresim_1'] ?>" alt="">
                                            <img src="<?php echo $row['urun_kresim_2'] ?>" alt="">
                                            <img src="<?php echo $row['urun_kresim_3'] ?>" alt="">
                                            <img src="<?php echo $row['urun_kresim_2'] ?>" alt="">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="product-inner">
                                        <h2 class="product-name"><?php echo $row['urun_adi'] ?></h2>
                                        <div class="product-inner-price">
                                            <ins><?php echo $row['urun_fiyat'] ?>₺</ins> <del><?php echo $row['urun_indirimli_fiyat'] ?>₺</del>
                                            <div class='product-carousel-price'>
                                                <input type="tex" name="adet" value="1"/>
                                            </div>
                                            <div class='product-option-shop'>
                                                <input type="hidden" name='idisi' value="<?php echo $row['urun_id']?>" />
                                                <button id=<?php echo $row['urun_id'];?> type="submit" name="s_ekle" class="add_to_cart_button">Sepete Ekle</button>
                                            </div>
                                            <div class='product-option-shop'>
                                                <input type="tex" name="teklif_fiyati" value=""/>
                                            </div>
                                            <div class='product-option-shop'>
                                                <button id=<?php echo $row['urun_id'];?> type="submit" name="t_ekle" class="add_to_cart_button">Teklif Ver</button>
                                            </div>
                                        </div>

                                        <div role="tabpanel">
                                            <ul class="product-tab" role="tablist">
                                                <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Ürün Açıklaması</a></li>
                                                <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">En Yüksek Teklif</a></li>
                                            </ul>
                                            <div class="tab-content">
                                                <div role="tabpanel" class="tab-pane fade in active" id="home">
                                                    <h2>Ürün Açıklaması</h2>
                                                    <p><?php echo $row['urun_aciklama']; ?></p>
                                                </div>
                                                <div role="tabpanel" class="tab-pane fade" id="profile">
                                                    <h2>Teklif Hakkında Bilgi</h2>
                                                    <div class="submit-review">
                                                        <p>
                                                            <label for="name">En Yüksek Teklif Veren Kişi :</label>
                                                            <input name="name" type="text" value="<?php echo $cek['teklif_veren_kisi'];?>">
                                                        </p>
                                                        
                                                        <div class="rating-chooser">
                                                            <p>Kazanan :</p>

                                                            <div class="rating-wrap-post">
                                                                <?php 
                                                                $urunbul= mysqli_query($baglanti,"Select * from urunler where urun_id='$urungelenid'");
                                                                $ayikla=mysqli_fetch_assoc($urunbul);
                                                                $teklif_son_saati = $ayikla['urun_teklif_saati'];

                                                                $d=strtotime("+0 Hours");
                                                                $now=date("Y-m-d h:i:sa", $d);
                                                                if ($teklif_son_saati <= $now) 
                                                                {
                                                                    echo $cek['teklif_veren_kisi'];

                                                                }else
                                                                {
                                                                    echo "";

                                                                }  


                                                                    ?>
                                                                </div>
                                                            </div>
                                                            <p>
                                                                <label for="review">Senin Yorumun</label>
                                                                <textarea name="review" id="" cols="30" rows="10"></textarea>
                                                            </p>
                                                            <p>
                                                                <input type="submit" value="Submit">
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </form>
                            <?php
                        }
                    }
                    ?>


                </div>
            </div>
        </div>
    </div>
</div>

<?php include('footer.php'); ?>