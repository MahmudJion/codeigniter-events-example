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

// Event triggered before the system starts
Events::on('pre_system', function () {
    echo "Event 1 - pre_system worked successfully." . PHP_EOL;
});

// Event triggered after the controller constructor (priority 1)
Events::on('post_controller_constructor', function () {
    echo "Event 2.1 - post_controller_constructor event ran successfully." . PHP_EOL;
}, 1);

// Event triggered after the controller constructor (priority 2)
Events::on('post_controller_constructor', function () {
    echo "Event 2.2 - post_controller_constructor event ran successfully." . PHP_EOL;
}, 2);

// Event triggered after the system finishes execution
Events::on('post_system', function () {
    echo "Event 3 - post_system event ran successfully." . PHP_EOL;
});

// Custom event to send an email with a verification code
Events::on('sendEmail', function ($email, $code) {
    if (filter_var($email, FILTER_VALIDATE_EMAIL) && !empty($code)) {
        echo "Email has been sent successfully to {$email} with verification code: {$code}" . PHP_EOL;
    } else {
        echo "Invalid email or verification code provided." . PHP_EOL;
    }
});