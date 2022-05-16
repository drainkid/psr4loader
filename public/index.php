<h1>fet</h1>

<?php

spl_autoload_register(function($class) {
		$ds = DIRECTORY_SEPARATOR;
		
		$filename = $_SERVER['DOCUMENT_ROOT'] . $ds . 'src'. $ds .str_replace('\\', $ds, $class) .  '.php';
		require_once($filename);
	});

use fol1\class1;
use fol1\fol2\class2;

 
$c1= new class1();
$c1->print_mes();
$c2= new class2();
$c2->print_shit();


?>

