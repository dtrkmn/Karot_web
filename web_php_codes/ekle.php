﻿


<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>K.ÇEKMECE GÖLÜ</title> 
<meta name="keywords" content="salda lake, web design, free css template," /> 
<meta name="description" content="salda lake, free CSS template, web design" /> 
<link href='http://fonts.googleapis.com/css?family=Dosis:300,400,500,600,700,800' rel='stylesheet' type='text/css'>
<link href="templatemo_stylesss.css" rel="stylesheet" media="screen">
<link rel="stylesheet" href="//code.jquery.com/ui/1.11.2/themes/smoothness/jquery-ui.css">
  <script src="js/jquery-1.10.2.js"></script>
  <script src="js/jquery-ui.js"></script>
 <link rel="stylesheet" href="/resources/demos/style.css">
  
 <script>
  $(function() {
    $( "#datepicker" ).datepicker();
  });
 </script>
  
  
</head>
<body>
<div id="templatemo_wrapper">
	
    <div id="templatemo_header">
	   <h2>VERİ GİRİŞİ</h2>	
       <div class="cleaner"></div>
    </div> <!-- end of header -->
    
     
    <h1>
    <div id="templatemo_main">
		<div id="page">
		<form action="gonder.php" method="post">
		 İsim: <br/>
		 <input type="text" name="isim" /><br/>
		Koordinat: <br/>
		 <input type="float" name="koordinat" /><br/>
		Derinlik: <br/>
		 <input type="float" name="derinlik" /><br/><br>
		Veri Tipi: <br/>
		 <input type="radio" name="veri_tipi" value="su" />Su <br/>
		 <input type="radio" name="veri_tipi" value="sismik" /> Sismik<br/>
		 <input type="radio" name="veri_tipi" value="kısa" /> Kısa Karot<br/>
		 <input type="radio" name="veri_tipi" value="uzun" /> Uzun Karot<br/>
		 <input type="radio" name="veri_tipi" value="taban" /> Taban Karotu<br/>
		 <input type="radio" name="veri_tipi" value="diğer" /> Diğer<br/>
		 
		
 
		Notlar: <br/>
		 <textarea name="notlar"></textarea><br/>
		 
		 
		 <p>Tarih: <br/><input type="text" name="date" id="datepicker"></p>
		
		   Çalışanlar:<br/>
		 <textarea name="calisanlar"></textarea><br/> 
		   
		  <br></br>
		<input type="submit" name="submit" value="Submit" />
		</form>
		
	
    </h1>
       <div class="cleaner"></div>
        
    </div> <!-- end of templatemo_main -->
	
    </div>
   

</div> <!-- end of wrapper -->

</body>
	</html>
<?php


?>	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	