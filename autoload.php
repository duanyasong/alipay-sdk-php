<?php
    // Now that we have an autoloader, let's register it!
    spl_autoload_register(function($class){
		$file = __DIR__ . '/src/aop/'.$class.'.php';

		if(file_exists($file)){
			require_once($file);
		}
		$file = __DIR__ . '/src/aop/request/'.$class.'.php';
		if(file_exists($file)){
			require_once($file);
		}
	});
