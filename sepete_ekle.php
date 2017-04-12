<?php
require_once('baglan.php');

$k_adi = $_SESSION['uye_adi'];



if(isset($_POST['add-to-cart']))
{

    $idsi = $_POST['urunidisi'];
    if ($idsi) 
    {
        $bul = mysqli_query($baglanti,"Select urun_id,urun_indirimli_fiyat from urunler where urun_id='$idsi'");
        $row = mysqli_fetch_assoc($bul);
        $urunfiyat = $row['urun_indirimli_fiyat'];


        $adet = $_POST['adet'];
        $toplam = ($adet)*($urunfiyat);


        $que = mysqli_query($baglanti,"INSERT INTO sepet SET sepet_alan_kisi = '$k_adi',
           sepet_urun = '$idsi',
           sepet_urun_fiyat = '$urunfiyat',
           sepet_adet ='$adet',
           sepet_toplam ='$toplam'");
        if ($que) {
            header("Location:shop.php");
        }
        else
        {

        }
    }

    
    
}

if(isset($_POST['s_ekle']))
{
    $id = $_POST['idisi'];
    if($id)
    {
        $bul = mysqli_query($baglanti,"Select urun_id,urun_indirimli_fiyat from urunler where urun_id='$id'");
        $row = mysqli_fetch_assoc($bul);
        $urunfiyat = $row['urun_indirimli_fiyat'];

        $adet = $_POST['adet'];
        $toplam = ($adet)*($urunfiyat);
        

        $que = mysqli_query($baglanti,"INSERT INTO sepet SET sepet_alan_kisi = '$k_adi',
           sepet_urun = '$id',
           sepet_urun_fiyat = '$urunfiyat',
           sepet_adet ='$adet',
           sepet_toplam ='$toplam'");

        if($que)
        {
            header("Location:shop.php");
        }

    }
}

if (isset($_POST['t_ekle'])) 
{

    $urun_id = $_POST['idisi'];
    $teklif_fiyati = $_POST['teklif_fiyati'];
    

    $urunbul= mysqli_query($baglanti,"Select * from urunler where urun_id='$urun_id'");
    $ayikla=mysqli_fetch_assoc($urunbul);
    $teklif_son_saati = $ayikla['urun_teklif_saati'];

    $d=strtotime("+0 Hours");
    $now=date("Y-m-d h:i:sa", $d);      
    



    
    if ($teklif_son_saati <= $now) 
    {


       $_SESSION['hata'] = "Teklif Sona Ermiştir";
       header("Location:hata.php");



   }
   else
   {
    $sorgu = mysqli_query($baglanti,"SELECT * FROM teklifler WHERE teklif_veren_kisi = '$k_adi' AND teklif_urun='$urun_id'");
    if(mysqli_num_rows($sorgu)!=0)
    {
        $teklif_update = mysqli_query($baglanti,"UPDATE teklifler SET
            teklif_fiyati = '$teklif_fiyati',
            teklif_veren_kisi = '$k_adi',
            teklif_verilme_tarihi = '$now'
            WHERE teklif_veren_kisi = '$k_adi' AND teklif_urun='$urun_id'");
        if($teklif_update)
        {
            header("Location:teklifler.php");

        }


    }
    else
    {
        $teklif_insert = mysqli_query($baglanti,"INSERT INTO teklifler SET teklif_urun = '$urun_id',
            teklif_fiyati = '$teklif_fiyati',
            teklif_veren_kisi = '$k_adi',
            teklif_verilme_tarihi = '$now'");
        if($teklif_insert)
        {
            header("Location:teklifler.php");

        }

    }


}
}








?>