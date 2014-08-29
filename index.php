<?php   
	$lang = "";

    if(isset($_GET['lang'])) {
        $lang = $_GET['lang'];
    }

    if($lang == 'en') {
        $ruta = 'ing/';
    } else {
        $ruta = 'esp/';
    }
    include $ruta . 'header.php';

    $option = "";

    if(isset($_GET['opcion'])) {
    	$option = $_GET['opcion'];

    	switch($option) {
    		case 'opcion1': include $ruta . 'opcion1.php'; break;
    		case 'opcion2': include $ruta . 'opcion2.php'; break;
    		case 'opcion3': include $ruta . 'opcion3.php'; break;
    	}

    } else {
    	 include $ruta . 'opcion1.php';
    }
	
	include $ruta . 'footer.php';
?>
