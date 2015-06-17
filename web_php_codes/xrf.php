<?php

	header( "Content-Type: application/vnd.ms-excel" );
	header( "Content-disposition: attachment; filename=Kcekmece_Lagunu_xrf_veriler.xls" );
	require_once("mysql.php");
	
	echo 'id' . "\t" . 'position' . "\t" . 'sample_surface' . "\t" . 'validity' . "\t" . 'E_gain' ."\t" . 'E_offset' . "\t" . 'F_slope' . "\t" . 'F_offset' . "\t" . 'kcps' . "\t" . 'MSE' . "\t" . 'Al' . "\t" . 'Si' . "\t" . 'P' . "\t" . 'S' . "\t" . 'Cl' . "\t" . 'Ar' ."\t" . 'K' ."\t" . 'Ca' . "\t" . 'Sc' . "\t" . 'Ti' . "\t" . 'V' . "\t" . 'Cr' . "\t" . 'Mn' . "\t" . 'Fe' . "\t" . 'Co' . "\t" . 'Ni' . "\t" . 'Cu' . "\t" . 'Zn' . "\t" . 'Ga' . "\t" . 'Ge' . "\t" . 'As' . "\t" . 'Se' . "\t" . 'Br' . "\t" . 'Rb' . "\t"  . 'Sr' . "\t" . 'Y' . "\t" . 'Zr' . "\t" . 'Nb' . "\t" . 'Mo' . "\t" . 'Cs' . "\t" . 'Ba' . "\t" . 'Ta' . "\t" . 'W' . "\t" . 'Pb' . "\t" . 'Th' . "\t" . 'U' . "\t" . 'inc' . "\t" . 'coh' . "\n" ;
	
	$q=$dba->query("SELECT * FROM xrf Order by id");
	
	while($row=$dba->fetch_assoc($q)){
	echo $row['id'] . "\t" . $row['position'] . "\t" . $row['sample_surface'] ."\t" . $row['validity'] . $row['E_gain'] ."\t" . $row['E_offset'] ."\t" . $row['F_slope'] ."\t" . $row['F_offset'] ."\t" . $row['kcps'] ."\t" . $row['MSE'] ."\t" . $row['Al'] ."\t" . $row['Si'] ."\t" . $row['P'] ."\t" . $row['S'] ."\t" . $row['Cl'] ."\t" . $row['Ar'] ."\t" . $row['K'] ."\t" . $row['Ca'] ."\t" . $row['Sc'] ."\t" . $row['Ti'] ."\t" . $row['V'] ."\t" . $row['Cr'] ."\t" . $row['Mn'] ."\t" . $row['Fe'] ."\t" . $row['Co'] ."\t" . $row['Ni'] ."\t" . $row['Cu'] ."\t" . $row['Zn'] ."\t" . $row['Ga'] ."\t" . $row['Ge'] ."\t" . $row['As'] ."\t" . $row['Se'] ."\t" . $row['Br'] ."\t" . $row['Rb'] ."\t" . $row['Sr'] ."\t" . $row['Y'] ."\t" . $row['Zr'] ."\t" . $row['Nb'] ."\t" . $row['Mo'] ."\t" . $row['Cs'] ."\t" . $row['Ba'] ."\t" . $row['Ta'] ."\t" . $row['W'] ."\t" . $row['Pb'] ."\t" . $row['Th'] ."\t" . $row['U'] ."\t" . $row['inc'] ."\t" . $row['coh']  . "\n";	
	}
	
?>