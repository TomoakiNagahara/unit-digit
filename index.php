<?php
/**
 * unit-digit:/index.php
 *
 * @created   2017-01-19
 * @version   1.0
 * @package   unit-sql
 * @author    Tomoaki Nagahara <tomoaki.nagahara@gmail.com>
 * @copyright Tomoaki Nagahara All right reserved.
 */

//	Include default class.
if(!include(__DIR__."/Digit.class.php")){
	Notice::Set("Include Digit.class.php was failed.");
	return;
}

/**
 *
 * Only ready.
 *
spl_autoload_register(function ($name){
	$path = __DIR__."/{$name}.class.php";
	if( file_exists($path) ){
		include($path);
	}
});
*/