<?php
include('head.php');
include('header.php');
include('menuler.php');
?>



<!-- End mainmenu area -->

<div class="slider-area">

    <div id="slide-list" class="carousel slide"> 

        <ol class="carousel-indicators">
            <li data-target="#slide-list" data-slide-to="0" class="active"></li>
            <li data-target="#slide-list" data-slide-to="1"></li>
            <li data-target="#slide-list" data-slide-to="2"></li>
        </ol>

        <div class="carousel-inner">

            <div class="item active">
                <div class="single-slide">
                    <div class="slide-text-wrapper">
                     <div class="slide-text">
                         <div class="container">

                             <?php
                             require_once('baglan.php');
                             $slider1 = mysqli_query($baglanti,"select * from slider_resim where slider_id=1");
                             if (mysqli_num_rows($slider1)!=0)
                             {
                                $row = mysqli_fetch_assoc($slider1)


                                ?>

                                <img src=<?php echo $row['slider_yolu']; ?> alt =<?php echo $row['slide_adi']; ?> class ="img-responsive">

                                <div class="carousel-caption">
                                    <h3><?php echo $row['Slide_adi']; ?></h3>
                                    <p><?php echo $row['slider_aciklama']; ?></p>
                                    <?php
                                }
                                ?>
                            </div> 
                        </div> 
                    </div>
                </div> 
            </div> 
        </div>

        <div class="item">
            <div class="single-slide">
                <div class="slide-text-wrapper">
                 <div class="slide-text">
                     <div class="container">

                         <?php
                         require_once('baglan.php');
                         $slider2 = mysqli_query($baglanti,"select * from slider_resim where slider_id=2");
                         if (mysqli_num_rows($slider2)!=0)
                         {
                            $row = mysqli_fetch_assoc($slider2)


                            ?>
                            <img src=<?php echo $row['slider_yolu']; ?> alt =<?php echo $row['slide_adi']; ?> class ="img-responsive"> 
                            <div class="carousel-caption">
                                <h3><?php echo $row['Slide_adi']; ?></h3>
                                <p><?php echo $row['slider_aciklama']; ?></p>

                                <?php
                            }
                            ?>

                        </div>
                    </div> 
                </div> 
            </div>
        </div>    

    </div>

    <div class="item">
        <div class="single-slide">
            <div class="slide-text-wrapper">
             <div class="slide-text">
                 <div class="container">

                     <?php
                     require_once('baglan.php');
                     $slider3 = mysqli_query($baglanti,"select * from slider_resim where slider_id=3");
                     if (mysqli_num_rows($slider3)!=0)
                     {
                        $row = mysqli_fetch_assoc($slider3)


                        ?>

                        <img src=<?php echo $row['slider_yolu']; ?> alt =<?php echo $row['slide_adi']; ?> class ="img-responsive"> 
                        <div class="carousel-caption">
                            <h3><?php echo $row['Slide_adi']; ?></h3>
                            <p><?php echo $row['slider_aciklama']; ?></p>

                            <?php
                        }
                        ?>

                    </div>  
                </div>
            </div> 
        </div> 
    </div> 

</div>

</div>

<a class = "carousel-control left" href = "#slide-list" data-slide ="prev">
    <span class="icon-prev"></span>
</a>

<a class = "carousel-control right" href = "#slide-list" data-slide ="next">
    <span class="icon-next"></span>
</a>



</div>
</div>
<!-- End slider area -->

<div class="promo-area">
    <div class="zigzag-bottom"></div>
</div>
<!-- End promo area -->

<div class="maincontent-area">
    <div class="zigzag-bottom"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="latest-product">
                    <h2 class="section-title">En Yeni Ürünler</h2>
                    <div class="product-carousel">

                    <?php
                        require_once('baglan.php');
                        $sonurunler = mysqli_query($baglanti,"SELECT * FROM urunler ORDER BY urun_id DESC LIMIT 6"); 

                        if (mysqli_num_rows($sonurunler)!=0) 
                        {
                            while ($row = mysqli_fetch_assoc($sonurunler)) 
                            {

                                ?>
                    
                        <div class="single-product">
                        
                            <div class="product-f-image">
                                <img src="<?php echo $row['urun_bresim']; ?>" alt="">
                                <div class="product-hover">
                                    <a href="sepet_guncelle.php?urunid=<?php echo $row['urun_id']; ?>" class="add-to-cart-link"><i class="fa fa-shopping-cart"></i> Sepete Ekle</a>
                                    <a href="urun_detay.php?urunid=<?php echo $row['urun_id']; ?>" class="view-details-link"><i class="fa fa-link"></i> Detayları Gör</a>
                                </div>
                            </div>

                            <h2><a href="urun_detay.php?urunid=<?php echo $row['urun_id'];?>"><?php echo $row['urun_adi']; ?></a></h2>

                            <div class="product-carousel-price">
                                <ins><?php echo $row['urun_indirimli_fiyat']; ?>₺</ins> <del><?php echo $row['urun_fiyat']; ?>₺</del>
                            </div>

                          
                        </div>

                        
                        <?php
                            }
                        }
                        ?> 
                        
                       




                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End main content area -->

<div class="brands-area">
    <div class="zigzag-bottom"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="brand-wrapper">
                    <h2 class="section-title">Markalar</h2>
                    <div class="brand-list">

                        <?php
                        require_once('baglan.php');
                        $markalar = mysqli_query($baglanti,"select marka_yolu from markalar");

                        if (mysqli_num_rows($markalar)!=0) 
                        {
                            while ($row = mysqli_fetch_assoc($markalar)) 
                            {

                                ?>
                                <img src=<?php echo $row['marka_yolu']; ?> alt="">
                                <?php

                            }
                        }

                        ?>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End brands area -->


<?php include('footer.php');   ?>