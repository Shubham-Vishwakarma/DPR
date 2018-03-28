<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use User;

class EmailNotificationController extends Controller
{

    public function sendMail($userID){
      $data = array('name'=>"",
      ""
      "body" => "This is Auto-generated mail. Dont't Reply.");
	    Mail::send('emails.mail', $data, function($message) {
	    $message->to('yogmah6@gmail.com', 'Yog Mah')
	            ->subject('Registration Completed');
	    $message->from('yogmah6@gmail.com','Yog Mah');

	});

    }
}
