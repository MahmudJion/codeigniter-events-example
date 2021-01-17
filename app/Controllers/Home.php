<?php
namespace App\Controllers;
use CodeIgniter\Events\Events;

class Home extends BaseController
{
	public function index()
	{
        //return view('welcome_message');
        echo "Event calling example<br>";
        Events::trigger('sendEmail', 'john@test.com', 12345678);
	}
}
