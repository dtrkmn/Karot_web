<?php

	header( "Content-Type: application/vnd.ms-excel" );
	header( "Content-disposition: attachment; filename=Kcekmece_Lagunu_toc_tic_veriler.xls" );
	require_once("mysql.php");
	
	echo 'derinlik mm' . "\t" . 'TOC'  . "\t" . 'TIC' ."\n" ;
	
	$q=$dba->query("SELECT * FROM toc_tic Order by derinlik");
	
	while($row=$dba->fetch_assoc($q)){
	echo $row['derinlik'] . "\t" . $row['TOC']   .  "\t" . $row['TIC'] ."\n";	
	}
	
?>