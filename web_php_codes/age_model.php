<?php

	header( "Content-Type: application/vnd.ms-excel" );
	header( "Content-disposition: attachment; filename=Kcekmece_Lagunu_age_model_veriler.xls" );
	require_once("mysql.php");
	
	echo 'position mm' . "\t" . 'GOY'  . "\n" ;
	
	$q=$dba->query("SELECT * FROM age_model Order by position");
	
	while($row=$dba->fetch_assoc($q)){
	echo $row['position'] . "\t" . $row['GOY']   . "\n";	
	}
	
?>