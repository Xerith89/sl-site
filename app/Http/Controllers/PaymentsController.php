<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Payment;
use App\Events\NewPaymentEvent;
use App\Http\Requests\StorePayment;

class PaymentsController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  StorePayment $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePayment $request)
    {
        $payment = Payment::create($request->validated());

        event(new NewPaymentEvent($payment));
                      
        return redirect('/payments')->with('success', 'Payment Completed, Thank You');
    }
}
