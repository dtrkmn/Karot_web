<?php
include("baglanti.php");
$ad = $_POST['isim'];
$koordinat = $_POST['koordinat'];
$derinlik = $_POST['derinlik'];
$veri= $_POST['veri_tipi'];
$not= $_POST['notlar'];
$date= $_POST['date'];
$calisanlar= $_POST['calisanlar'];



$sql = "insert into ekle(id_ekle, isim, koordinat, derinlik, veri_tipi, notlar, date, calisanlar) values (Null, '$ad', '$koordinat', '$derinlik', '$veri', '$not','$date', '$calisanlar')";
 
 if (mysql_query($sql)){
    echo "veriler eklendi";
	}
 else{
     echo "işlem başarısız..";
     }
 ?>