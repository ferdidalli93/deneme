<?php
require_once('baglan.php');

$k_adi = $_SESSION['uye_adi'];





    $idsi = $_GET['urunid'];
    if ($idsi) 
    {
        $bul = mysqli_query($baglanti,"SELECT urun_id,urun_indirimli_fiyat FROM urunler WHERE urun_id='$idsi'");
        $row = mysqli_fetch_assoc($bul);
        $urunfiyat = $row['urun_indirimli_fiyat'];


        $adet = 1;
        $toplam = ($adet)*($urunfiyat);


        $que = mysqli_query($baglanti,"INSERT INTO sepet SET sepet_alan_kisi = '$k_adi',
           sepet_urun = '$idsi',
           sepet_urun_fiyat = '$urunfiyat',
           sepet_adet ='$adet',
           sepet_toplam ='$toplam'");
        if ($que) {
            header("Location:index.php");
        }
        
    }

    
    


?>