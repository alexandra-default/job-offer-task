<?php

$key;

function bisearch($key){
	$filename; 
	
	$file = fopen($filename; 'r');
	while (!feof($file)){		
		$string = (yield trim(fgets($file)));
		$pieces = explode("\t", $string, 2);
		if($pieces[0] == $key){
			echo "Значение по ключу ".$key.": ".$pieces[1];
			break;
		} else {
			echo "Значение по ключу не найдено.";
		}
		
	}
	fclose($file);	
}
?>