<h3>Arama Detayi</h3>
    <p>Lütfen karot ismini giriniz.</p>
    <form  method="post" action="index.php?sayfa=arama">
      <input  type="text" name="aranan">
      <input  type="submit"  value="arama">
    </form>
<?php
mysql_select_db("geology", mysql_connect(localhost, "root", ""));
$aranan = $_POST['aranan'];
$veri = mysql_query("select * from whole_table where filename like '%$aranan%'");
 if(empty($aranan)) {
  echo "Arama alanını bos bıraktınız";
 }else {

 
if (mysql_num_rows ($veri)>0){
while ($bul = mysql_fetch_array($veri)){
$gelenveri = $bul ['filename'];
$a = $bul ['position'];
$b = $bul ['sample surface'];
$c = $bul ['validity'];
$d = $bul ['E-gain'];
$e = $bul ['E-offset'];
$f = $bul ['F-slope'];
$g = $bul ['F-offset'];
$h = $bul ['kcps'];
$j = $bul ['MSE'];
$k = $bul ['Al'];
$l = $bul ['Si'];
$m = $bul ['P'];
$n = $bul ['S'];
$o = $bul ['Cl'];
$p = $bul ['Ar'];
$r = $bul ['K'];
$s = $bul ['Ca'];
$t = $bul ['Sc'];
$u = $bul ['Ti'];
$v = $bul ['V'];
$y = $bul ['Cr'];
$z = $bul ['Mn'];
$ab = $bul ['Fe'];
$ac = $bul ['Co'];
$ad = $bul ['Ni'];
$ae = $bul ['Cu'];
$af = $bul ['Zn'];
$ah = $bul ['Ga'];
$aj = $bul ['Ge'];
$ak = $bul ['As'];
$al = $bul ['Se'];
$am = $bul ['Br'];
$an = $bul ['Rb'];
$ao= $bul ['Sr'];
$ap = $bul ['Y'];
$ar = $bul ['Zr'];
$as = $bul ['Nb'];
$at = $bul ['Mo'];
$au = $bul ['Cs'];
$av = $bul ['Ba'];
$ay= $bul ['TA'];
$az = $bul ['W'];
$bc = $bul ['Pb'];
$bd = $bul ['Th'];
$be = $bul ['U'];
$bf = $bul ['inc'];
$bh = $bul ['coh'];


echo "<b>$gelenveri</b> <i>$a</i> <i>$b</i> <i>$c</i> <i>$d</i> <i>$e</i> <i>$f</i> <i>$h</i> <i>$j</i> <i>$k</i> <i>$l</i> <i>$m</i> <i>$n</i> <i>$o</i> <i>$p</i> <i>$r</i> <i>$s</i> <i>$t</i> <i>$u</i> <i>$v</i> <i>$y</i> <i>$z</i> <i>$ab</i> <i>$ac</i> <i>$ad</i> <i>$ae</i> <i>$af</i> <i>$ag</i> <i>$ah</i> <i>$aj</i> <i>$ak</i> <i>$al</i> <i>$am</i> <i>$an</i> <i>$ao</i> <i>$ap</i> <i>$ar</i> <i>$as</i> <i>$at</i> <i>$au</i> <i>$av</i> <i>$ay</i> <i>$az</i> <i>$bc</i> <i>$bd</i> <i>$be</i> <i>$bf</i> <i>$bg</i> <b>$bh</b> <hr><br> $test";

}
}
else{
echo "Aradığınız Sonuç Bulunamadı";

}
}

?>

	
	
	
	