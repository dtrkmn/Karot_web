<?php
include("baglanti.php");
$oku=mysql_query("select *from ekle order by id_ekle desc");
while ($listele=mysql_fetch_array($oku))


echo "<br></br><strong>Ad:</strong> $listele[isim]<br>
 <strong>koordinat:</strong>$listele[koordinat]<br>
 <strong>derinlik:</strong>$listele[derinlik]<br> 
 <strong>veri_tipi:</strong>$listele[veri_tipi]<br>
 <strong>notlar:</strong> $listele[notlar]<br>
 <strong>date:</strong>$listele[date]<br>
 <strong>calisanlar:</strong>$listele[calisanlar]<br>
 <strong>resimler:</strong>$listele[resimler]";




?>