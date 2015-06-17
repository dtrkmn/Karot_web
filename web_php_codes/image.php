<html lang="en-US">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title></title>
</head>
<body>

<?php

include("baglanti.php");
mysql_query("Set names 'latin5'");
mysql_query("set character set latin5");
mysql_query("set collation_connection= 'latin5_turkish_ci'");
if($_POST){
	if ($_FILES["resim"]["size"]<4096*4096){
		if ($_FILES["resim"]["type"]=="image/jpeg" or "image/png" or "image/jpg"){
			$aciklama=$_POST["aciklama"];
			$dosya_adi=$_FILES["resim"]["name"];
			//Dosyaya yeni bir isim oluşturuluyor
			$uret=array("as","rt","ty","yu","fg");
			$uzanti=substr($dosya_adi,-4,4);
			$sayi_tut=rand(1,10000);
			$yeni_ad="dosyalar/".$uret[rand(0,4)].$sayi_tut.$uzanti;
			//Dosya yeni adıyla dosyalar klasörüne kaydedilecek
			if (move_uploaded_file($_FILES["resim"]["tmp_name"],$yeni_ad)){
				echo 'Dosya başarıyla yüklendi.';
				//Bilgiler veri tabanına kaydedilsin
				$sorgu=mysql_query("insert into resimler (resim, aciklama) values ('$yeni_ad',  '$aciklama')");
				if ($sorgu){
					echo 'Veritabanına kaydedildi.';
				}else{
					echo 'Kayıt sırasında hata oluştu!';
				}
			}else{
				echo 'Dosya Yüklenemedi!';
			}
		}else{
			echo 'Dosya yalnızca jpeg,png,jpg formatında olabilir!';
		}
	}else{			
		echo 'Dosya boyutu 4 Mb ı geçemez!';
	}
}
?>
<form action="" method="post" name="form1" enctype="multipart/form-data">
<input type="file" name="resim"/><br/>
<input type="text" name="aciklama"/><br/>
<input type="submit" name="gonder" value="Kaydet"/>
</form>
<?php
$sorgu2=mysql_query("select * from resimler");
if (mysql_num_rows($sorgu2)){
	echo '<table>';
	//Veritabanında resimler listeleniyor.
	while($kayit=mysql_fetch_array($sorgu2)){
		echo '<tr>';
		echo '<td><img src="'.$kayit["resim"].'" width="75" height="75"/></td>';
		echo '<td>'.$kayit["aciklama"].'</td>';
		echo '</tr>';
	}
	echo '</table>';
}
?>
</body>
</html>