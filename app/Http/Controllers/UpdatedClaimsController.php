<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StoreUpdatedClaim;
use App\Events\NewUpdatedClaimEvent;
use App\UpdatedClaim;
use Carbon\Carbon;

class UpdatedClaimsController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\StoreClaim  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreUpdatedClaim $request)
    {
       
        $updatedClaim = UpdatedClaim::create($request->validated());
        
        $filenames = array();
        // Check the MIME type of any uploaded files
        if ($request->hasfile('PolicyholderFiles')) {
            $request->validate([
                'PolicyholderFiles.*' => 'file|mimes:jpg,png,jpeg,pdf|max:5000'
            ]);
            $uploadNum = 0;
             // Loop through files and store them in the required directory
            foreach($request->file('PolicyholderFiles') as $file) {
              $file->storeAs('claims/'.$updatedClaim->ClaimNumber.'/updates/', $request->file('PolicyholderFiles')[$uploadNum]->getClientOriginalName());
              array_push($filenames, $request->file('PolicyholderFiles')[$uploadNum]->getClientOriginalName());
              $uploadNum++;
            }
        }
             
        event(new NewUpdatedClaimEvent($updatedClaim, $filenames));

        return redirect('/claims')->with('success', 'Thanks For The Update. We\'ll Be In Touch As Soon As Possible.');
    }
}
