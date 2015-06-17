<?php

	header( "Content-Type: application/vnd.ms-excel" );
	header( "Content-disposition: attachment; filename=Kcekmece_Lagunu_mscl_veriler.xls" );
	require_once("mysql.php");
	
	echo 'uzunluk mm' . "\t" . 'MS1'  . "\n" ;
	
	$q=$dba->query("SELECT * FROM mscl Order by uzunluk");
	
	while($row=$dba->fetch_assoc($q)){
	echo $row['uzunluk'] . "\t" . $row['MS1']   . "\n";	
	}
	
?>