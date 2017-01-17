<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Mail;

class PagesController extends Controller {

    public function index()
    {

	return view('pages.index');

    }
    
    
    public function contact()
    {

	return view('pages.contact');

    }
    
    public function postContact(Request $request)
    {
    
	$data = $request->all();
	
	/**
	* Variables will be available on the email view page as {{ $name }} and {{  $message  }} - The contact form keys
	* Not as $data[] or $data->name
	* 
	*/
    
	Mail::queue('emails.enquiry', $data, function($message)
	{
	    $message->to('alexe@wts-group.com', 'Alex Everett')->subject('Website Enquiry');
	});

	return redirect('contact')->withSuccess('Your message has been sent!');

    }
    
    

}
