<?php

namespace App\Http\Controllers;

use App\Contact;
use Illuminate\Http\Request;
use App\Http\Requests\StoreContact;
use App\Events\NewContactEvent;

class ContactController extends Controller
{
    
    /**
     * Store a newly created resource in storage.
     *
     * @param  StoreContact $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreContact $request)
    {
      $contact = Contact::create($request->validated());
      
      $filenames = array();
      // Check the MIME type of any uploaded files
      if ($request->hasfile('Filename')) {
          $request->validate([
              'Filename.*' => 'file|mimes:pdf|max:5000'
          ]);
          $uploadNum = 0;
          // Loop through files and store them in the required directory
          foreach($request->file('Filename') as $file) {
            $file->storeAs('uploads/contact/'.$contact->id, $request->file('Filename')[$uploadNum]->getClientOriginalName());
            array_push($filenames, $request->file('Filename')[$uploadNum]->getClientOriginalName());
            $uploadNum++;
          }
      }
              
      event(new NewContactEvent($contact,$filenames));
         
      return redirect('/contact')->with('success', 'Contact Form Submitted');
    }

}
