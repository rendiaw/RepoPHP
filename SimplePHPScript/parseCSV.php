<?php

/**
 * Example Simple Parsing CSV in PHP
 * using fgetcsv()  http://php.net/manual/en/function.fgetcsv.php
 * 
 * Author : Rendi Agung Wijaya
 * Email : rendiagungwijaya@gmail.com
 */

/** Get CSV file */
$file = "data.csv";

if (($handle = fopen($file,"r")) !== FALSE){
	while (($data = fgetcsv($handle, 1000, ",", ";")) !== FALSE){
		/** Get total columns */
		$num = count($data);
		for ($c=0; $c < $num; $c++) {
			/** Displaying results */
	        echo $data[$c] . "|\t";
	    }
	    echo '</br>';
	}
	fclose($handle);
}