<?php 


if($_GET['giris']=="no")
{
    $msj="Hatalı giriş yaptınız..";
    $renk="#DC143C";
} 
session_start(); 
$sayma =count($_SESSION['uye_adi']); 
if($sayma > 0) 
{ 
    $renk="#1abc9c";
    $uye_adi="Hoşgeldin ".$_SESSION['uye_adi'];
    $dvyk="dspnone"; // style özelliği sadece divlerde kullanılır.
}
else
{
    $cikisdiv = "dspnone";
}


?>

<body>

    <div class="header-area">
        <div class="container">
            <div class="row">

                <div class='<?php echo $dvyk; ?> col-md-1'>
                    <div class='user-menu'>
                        <ul class='list-unstyled list-inline '>

                            <li class='dropdown'>

                                <a data-toggle='dropdown' data-hover='dropdown' class='dropdown-toggle fa fa-user' href='#'><span class='key'>&nbsp;&nbsp;Login&nbsp;</span><b class='caret'></b>
                                </a>
                                <ul class='dropdown-menu'>
                                    <form action='islem.php' method='POST'>

                                        <p class='form-row form-row-last'>
                                            <label style='color:#1abc9c;margin-top:5px;margin-left:25px;' for='username'>Kullanıcı Adı :<span class='required'></span>
                                            </label>
                                            <input style='margin-left:3px; border-radius:5px;' type='text' required name='uye_kulad' class='input-text'>
                                        </p>
                                        <p class='form-row form-row-last'>
                                            <label style='color:#1abc9c;margin-left:25px;' for='password'>Şifre :<span class='required'></span>
                                            </label>
                                            <input style='margin-left:3px;border-radius:5px;' type='password' required name='uye_sifre' class='input-text'>
                                        </p>
                                        <p class='form-row'>
                                            <button style='margin-left:10px;border-radius: 5px;' type='submit' name='login' class='btn btn-primary'>Giriş</button>
                                            <button style='border-radius: 5px;' type='submit' name='uye_ol' class='btn btn-primary'>Üye Ol</button>
                                        </p>
                                    </form>
                                </ul>

                            </li>

                        </ul>
                    </div>
                </div>


                <div class='col-md-2'>
                    <div class='user-menu'>
                        <ul class='list-unstyled list-inline '>
                            <li style='color:<?php echo $renk; ?>; margin-top:7px;'>
                                <?php echo $uye_adi; echo $msj; ?>
                            </li>
                            
                        </ul>

                    </div>

                </div>


                <div class='<?php echo $cikisdiv; ?> col-md-10'>
                    <div class='header-right'>
                        <ul class='list-unstyled list-inline'>
                            <li>
                                <a href='logout.php'><i class='fa fa-times'></i>&nbsp;Çıkış</a>
                            </li>
                        </ul>
                    </div>
                </div>






            </div>
        </div>
    </div>
    <!-- End header area -->

    <!--    -->

    <div class="site-branding-area">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="logo">
                        <h1><a href="index.php">e<span> Ticaret Sitesi</span></a></h1>
                    </div>
                </div>

                <div class='col-sm-6'>
                    <div class="shopping-item">
                        <a href="sepet.php">Sepet - <span class="cart-amunt"><?php include 'sepet_fiyat.php'; ?>₺</span><i class="fa fa-shopping-cart"></i> 
                            <span class="product-count"><?php include 'sepet_adet.php'; ?></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

