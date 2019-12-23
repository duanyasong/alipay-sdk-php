<?php
    // Now that we have an autoloader, let's register it!
    spl_autoload_register(function($class){
		$file = __DIR__ . 'src/'.$class.'.php';
		if(file_exists($file)){
			require_once($file);
		}
		$file = __DIR__ . 'src/request/'.$class.'.php';
		if(file_exists($file)){
			require_once($file);
		}
	});

}