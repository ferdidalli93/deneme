<?php
include "baglan.php";


if(isset($_POST['update_cart']))
{
    header("Location:shop.php");
}


if(isset($_POST['proceed']))
{
    if ($_SESSION['uye_adi']=="") 
    {
        header("Location:sepet.php?grs=no");
    }
    else
    {
        header("Location:alisveris_tamamla.php");

    }
    
}
if(isset($_POST['yenile'])) {
    $search = mysqli_query($baglanti,"SELECT * FROM teklifler");
    $urun_son_saat = mysqli_query();
    
    $d=strtotime("+0 Hours");
    $now=date("Y-m-d h:i:sa", $d);   

    if (mysqli_num_rows($search)!=0) 
    {
        while ($row = mysqli_fetch_assoc($search)) 
        {

            if ($row['teklif_verilme_tarihi'] <= $now) 
            {
                //burda farklı bir tabloya ekleyelim o ürünü kazanan kişiyi belirleyelim.
                $ekle = mysqli_query($baglanti,"");

            }
        }
    }
    
}

if (isset($_POST['urun_ekle'])) 
{
 $urun_adi = $_POST['urun_adi'];
 $urun_fiyati = $_POST['urun_fiyati'];
 $urun_indirimli_fiyati = $_POST['urun_indirimli_fiyati'];
 $urun_aciklama = $_POST['urun_aciklama'];
 $urun_bresim = "img/".$_POST['urun_bresim'];
 $satankisi = $_SESSION['uye_adi'];




 $d=strtotime("+1 Hours");
 $zaman=date("Y-m-d h:i:sa", $d);  





 $ayarlarikaydet=mysqli_query($baglanti,"INSERT INTO urunler SET 
    urun_adi = '$urun_adi',
    urun_fiyat = '$urun_fiyati',
    urun_indirimli_fiyat ='$urun_indirimli_fiyati',
    urun_bresim ='$urun_bresim',
    urun_aciklama = '$urun_aciklama',
    urun_satan_kisi = '$satankisi',
    urun_teklif_saati='$zaman'");
 if ($ayarlarikaydet) 
 {
    header("Location:index.php");
}
else
{
   header("Location:urun_ekle.php?ekle=no");

}

}

if(isset($_POST['giris']))
{


    $uye_kulad=$_POST['uye_kulad'];
    $uye_sifre=$_POST['uye_sifre'];
    if($uye_kulad && $uye_sifre)
    {
        $sorgula=mysqli_query($baglanti,"SELECT * FROM uyeler WHERE uye_kulad='$uye_kulad' AND uye_sifre='$uye_sifre'");
        $verisayma=mysqli_num_rows($sorgula);
        if($verisayma>0)
        {

            $row=mysqli_fetch_assoc($sorgula);
            $_SESSION['uye_adi'] = $row['uye_adi'];
            $_SESSION['uye_id'] = $row['uye_id'];
            header("Location:index.php?log=yes");
        }
        else
        {
            header("Location:giris.php?log=no");
        }
    }


    //sepetteki kullanıcı adını burdan halledicez
    $ad = $_SESSION['uye_adi'];

    $que = mysqli_query($baglanti,"UPDATE sepet SET sepet_alan_kisi='$ad'");
}

if(isset($_POST['login']))
{

    $uye_kulad=$_POST['uye_kulad'];
    $uye_sifre=$_POST['uye_sifre'];

    if($uye_kulad && $uye_sifre)
    {
        $sorgula=mysqli_query($baglanti,"SELECT * FROM uyeler WHERE uye_kulad='$uye_kulad' AND uye_sifre='$uye_sifre'");
        $verisayma=mysqli_num_rows($sorgula);
        $geldigi_sayfa = $_SERVER['HTTP_REFERER']; 
        if($verisayma>0)
        {
            $row=mysqli_fetch_assoc($sorgula);
            $_SESSION['uye_adi'] = $row['uye_adi'];
            $_SESSION['uye_id'] = $row['uye_id'];                                                             

            header("Location:$geldigi_sayfa?giris=yes");


        }
        else
        {
            header("Location:$geldigi_sayfa?giris=no");

        }
    }

    $ad = $_SESSION['uye_adi'];

    $que = mysqli_query($baglanti,"update sepet set sepet_alan_kisi='$ad'");

}

if(isset($_POST['uye_ol']))
{
    header("Location:uyeol.php");

}


if(isset($_POST['uye_kayitol']))
{

    $adi=$_POST['uye_adi'];
    $soyadi=$_POST['uye_soyadi'];
    $kuladi=$_POST['uye_kulad'];
    $sifresi=$_POST['uye_sifre'];
    $email=$_POST['uye_email'];

    $ayarlarikaydet=mysqli_query($baglanti,"INSERT INTO uyeler SET 
        uye_adi = '$adi',
        uye_soyadi = '$soyadi',
        uye_kulad ='$kuladi',
        uye_sifre ='$sifresi',
        uye_email = '$email'");




    if($ayarlarikaydet)

    {
               // header("Location:ayarlar.php?durum=ok"); // üst klasöre gitmek istersem "Location:../ " yazmam gerekir
        $_SESSION['uye_kulad'] = $kuladi;
        header("Location:index.php");
    }
    else
    {
       header("Location:uyeol.php?durum=no");

   }

}


?>