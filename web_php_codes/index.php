<!DOCTYPE  HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"  "http://www.w3.org/TR/html4/loose.dtd">
<html>
  <head>
    
    <title>Arama</title>
	<style type = "text/css">
	body{margin:auto;background-color:#CCC;}
	#menu {width:900px; height:50px;margin:1px auto; background-color:#FFFFFF;}
	#menu a{text-decoration:none;font-size:25px;padding:5px 5px;margin:3px 0px;color:blue;}
	#menu a:hover{background-color:#000;color:#fff;}
	#icerik{width:900px;margin:4px auto;border:#ddd 1px solid;background-color:#CC00CC; color:white;}
	#alt{background-color:#000;color:#FFF;width:900px;margin:5px auto;}
	#a {  background-color:#ccc;}
	</style>
  </head>
  <p><body>
  
  <h1 align="center">Karot Veri Toplama Sistemi</h1>
   
	<div id="menu">
	  <a href="index.php">AnaSayfa</a>
	  <a href="index.php?sayfa=ekle">Kayıt Ekle</a>
	  
	  <a href="index.php?sayfa=listele">Listele</a>
	  <a href="index.php?sayfa=arama">Arama</a>
	</div>
	<div id="icerik">
	 <br></br>
	
	<?php
	mysql_select_db("geology", mysql_connect(localhost, "root", ""));
	$sayfa=@$_GET["sayfa"];
	switch ($sayfa) {
	           case "ekle";
			     include("ekle.php");
				 break;
			case "sil";
         include("sil.php");
break;
case "listele";
   include("listele.php");
    break;
case "arama";
   include("arama.php");
  break;  
default;
   include("anasayfa.php");
break;   
	}
	?>
	</div>
	<div id="alt">
	Tüm &copy Haklari Saklidir
	</div>
  </body>
</html>
</p>