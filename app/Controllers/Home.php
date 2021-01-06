<?php
namespace App\Controllers;
use CodeIgniter\Events\Events;

class Home extends BaseController
{
	public function index()
	{
        //return view('welcome_message');
        echo "Hello World<br>";
        Events::trigger('sendEmail', 'abc@test.com', 12345678);
	}
}
