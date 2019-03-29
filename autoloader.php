<?php 

spl_autoload_register(function ($class) {
	if (file_exists(__DIR__.'/Classes/' . $class . '.php')) {
    	require_once __DIR__.'/Classes/' . $class . '.php';
	}
	elseif (file_exists(__DIR__.'/Models/' . $class . '.php')) {
    	require_once __DIR__.'/Models/' . $class . '.php';
	}
	elseif (file_exists(__DIR__.'/Controllers/' . $class . '.php')) {
    	require_once __DIR__.'/Controllers/' . $class . '.php';
	}
});
