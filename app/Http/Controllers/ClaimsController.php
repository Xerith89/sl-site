<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StoreClaim;
use App\Events\NewClaimEvent;
use App\Claim;
use Carbon\Carbon;

class ClaimsController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\StoreClaim  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreClaim $request)
    {
       
        $claim = Claim::create($request->validated());
        
        $filenames = array();
        // Check the MIME type of any uploaded files
        if ($request->hasfile('photos')) {
            $request->validate([
                'photos.*' => 'file|mimes:jpg,png,jpeg|max:5000'
            ]);
            $uploadNum = 0;
            // Loop through files and store them in the required directory
            foreach($request->file('photos') as $file) {
              $file->storeAs('claims/'.$claim->id.'/images/', $request->file('photos')[$uploadNum]->getClientOriginalName());
              array_push($filenames, $request->file('photos')[$uploadNum]->getClientOriginalName());
              $uploadNum++;
            }
        }
             
        event(new NewClaimEvent($claim, $filenames));

        return redirect('/claims')->with('success', 'Claim Reported. We\'ll Be In Touch As Soon As Possible.');
    }
}
