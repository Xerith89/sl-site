<?php

namespace App\Http\Controllers;

use App\Quote;
use Illuminate\Http\Request;
use PHPMailer\PHPMailer;
use App\Http\Requests\StoreQuote;
use App\Events\NewQuoteEvent;
use Carbon\Carbon;

class QuotesController extends Controller
{
    
    /**
     * Store a newly created quote resource in storage.
     *
     * @param  StoreQuote $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreQuote $request)
    {
        
        $completed_quote = Quote::create($request->validated());

        // If we have been passed claims details from the client then store them as json
        if($request->has('ClaimsDetails')) {
           $completed_quote['ClaimsDetails'] = json_encode($request['ClaimsDetails']);
           $completed_quote->save();
          }
    
        $path = '../storage/app/quotes/'.$completed_quote->id.'/web_quote'.$completed_quote->Firstname.$completed_quote->Surname.Carbon::parse()->format('Y-m-d-H-i-s').'.txt';
       
        event(new NewQuoteEvent($completed_quote, $path));
                      
        return redirect('/quote')->with('success', 'Quote Successfully Submitted, Thank You');
    }

}
