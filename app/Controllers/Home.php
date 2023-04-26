<?php
namespace App\Controllers;

use CodeIgniter\Events\Events;

class Home extends BaseController
{
    public function index()
    {
        echo "Example of triggering an event <br>";

        // Trigger an event named "sendEmail" with the given data
        Events::trigger('sendEmail', 'john@test.com', 12345678);

        // You can also pass an array of data to the event
        $data = [
            'email' => 'jane@test.com',
            'code' => 87654321
        ];
        Events::trigger('sendEmail', $data);

        // You can also listen to an event and execute a callback function when it is triggered
        Events::on('sendEmail', function($data){
            echo "Email sent to: " . $data['email'] . "<br>";
            echo "Code: " . $data['code'] . "<br>";
        });
    }
}