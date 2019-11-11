<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StoreAgency;
use App\Events\NewAgencyEvent;
use App\Agency;
use Carbon\Carbon;

class AgenciesController extends Controller
{
    public function store(StoreAgency $request)
    {
       
        $agency = Agency::create($request->validated());
        
        $filenames = array();
        // Check the MIME type of any uploaded files
        if ($request->hasfile('accounts')) {
            $request->validate([
                'accounts.*' => 'file|mimes:pdf|max:5000'
            ]);
            $uploadNum = 0;
            // Loop through files and store them in the required directory
            foreach($request->file('accounts') as $file) {
              $file->storeAs('agencies/'.$agency->id.'/accounts/', $request->file('accounts')[$uploadNum]->getClientOriginalName());
              array_push($filenames, $request->file('accounts')[$uploadNum]->getClientOriginalName());
              $uploadNum++;
            }
        }
             
        event(new NewAgencyEvent($agency, $filenames));

        return redirect('/broker#agency')->with('success', 'Application Received. We\'ll Be In Touch As Soon As Possible.');
    }
}
