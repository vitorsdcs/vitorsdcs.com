<?php

class ContactController extends BaseController {
	// Server Contact view:: we will create view in next step
	public function getContact() {
		return View::make('contact');
	}

	// Contact Form
	public function getContactUsForm(){
		// Get all the data and store it inside Store Variable
		$data = Input::all();
		
		// Validation rules
		$rules = array (
			'name' => 'required',
			'email' => 'required|email',
			'subject' => 'required',
			'message' => 'required|min:25'
		);
		
		// Validate data
		$validator = Validator::make($data, $rules);
		
		//If everything is correct than run passes.
		if ($validator->passes()) {
			//Send email using Laravel send function
			Mail::send('emails.hello', $data, function($message) use ($data) {
				//email 'From' field: Get users email add and name
				$message->from($data['email'] , $data['name']);
				//email 'To' field: cahnge this to emails that you want to be notified.
				$message->to('vitorsdcs@outlook.com', 'Vitor Silva C. Santos')->subject($data['subject']);
			});
			
			return View::make('contact');
		}
		else {
			//return contact form with errors
			return Redirect::to('/contato')->withErrors($validator);
		}
	}
}