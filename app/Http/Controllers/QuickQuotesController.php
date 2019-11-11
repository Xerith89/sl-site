<?php

namespace App\Http\Controllers;

use App\QuickQuote;
use App\Http\Requests\StoreQuickQuote;
use Illuminate\Http\Request;
use App\Events\NewQuickQuoteEvent;
use Illuminate\Support\Facades\Log;

class QuickQuotesController extends Controller
{
    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\StoreQuickQuote  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreQuickQuote $request)
    {
       
        $quick_quote = QuickQuote::create($request->validated());
        
        $filenames = array();
        // Check the MIME type of any uploaded files
        if ($request->hasfile('file')) {
            $request->validate([
                'file.*' => 'file|mimes:pdf|max:5000'
            ]);
            $uploadNum = 0;
            // Loop through files and store them in the required directory
            foreach($request->file('file') as $file) {
              $file->storeAs('uploads/quickquote/'.$quick_quote->id.'/', $request->file('file')[$uploadNum]->getClientOriginalName());
              array_push($filenames, $request->file('file')[$uploadNum]->getClientOriginalName());
              $uploadNum++;
            }
        }
      
        event(new NewQuickQuoteEvent($quick_quote, $filenames));

        return redirect('/direct')->with('success', 'Thanks! We\'ll Be In Touch.');
    }
}
