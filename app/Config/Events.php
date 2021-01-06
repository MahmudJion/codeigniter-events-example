<?php namespace Config;

use CodeIgniter\Events\Events;
use CodeIgniter\Exceptions\FrameworkException;

/*
 * --------------------------------------------------------------------
 * Application Events
 * --------------------------------------------------------------------
 * Events allow you to tap into the execution of the program without
 * modifying or extending core files. This file provides a central
 * location to define your events, though they can always be added
 * at run-time, also, if needed.
 *
 * You create code that can execute by subscribing to events with
 * the 'on()' method. This accepts any form of callable, including
 * Closures, that will be executed when the event is triggered.
 *
 * Example:
 *      Events::on('create', [$myInstance, 'myMethod']);
 */

// Events::on('pre_system', function () {
// 	if (ENVIRONMENT !== 'testing')
// 	{
// 		if (ini_get('zlib.output_compression'))
// 		{
// 			throw FrameworkException::forEnabledZlibOutputCompression();
// 		}

// 		while (ob_get_level() > 0)
// 		{
// 			ob_end_flush();
// 		}

// 		ob_start(function ($buffer) {
// 			return $buffer;
// 		});
// 	}

// 	/*
// 	 * --------------------------------------------------------------------
// 	 * Debug Toolbar Listeners.
// 	 * --------------------------------------------------------------------
// 	 * If you delete, they will no longer be collected.
// 	 */
// 	if (ENVIRONMENT !== 'production')
// 	{
// 		Events::on('DBQuery', 'CodeIgniter\Debug\Toolbar\Collectors\Database::collect');
// 		Services::toolbar()->respond();
// 	}
// });

Events::on('pre_system', function (){
	echo "<br>Event 1 - pre_system worked successfully. <br>";
});

Events::on('post_controller_constructor', function(){
	echo "<br> Event 2.1 - post_controller_constructor event ran successfully. <br>";
}, 1);

Events::on('post_controller_constructor', function(){
	echo "<br> Event 2.2 - post_controller_constructor event ran successfully. <br>";
}, 2);

Events::on('post_system', function (){
	echo "<br>Event 3 - post_system event ran successfully.<br>";
});
Events::on('sendEmail', function ($email, $code){
	echo "<br>Email has been sent successfully to this ". $email . " and your verification code is " . $code . "<br>";
});