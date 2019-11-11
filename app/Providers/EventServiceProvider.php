<?php

namespace App\Providers;

use Illuminate\Support\Facades\Event;
use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use App\Events\NewContactEvent;
use App\Events\NewQuoteEvent;
use App\Events\NewClaimEvent;
use App\Events\NewQuickQuoteEvent;
use App\Events\NewPaymentEvent;
use App\Events\NewAgencyEvent;
use App\Events\NewUpdatedClaimEvent;
use App\Listeners\MakeNewQuoteFile;
use App\Listeners\SendNewContactNotification;
use App\Listeners\SendNewContactAcknowledgement;
use App\Listeners\SendNewQuoteNotification;
use App\Listeners\SendNewQuoteAcknowledgement;
use App\Listeners\SendNewQQNotification;
use App\Listeners\SendNewQQAcknowledgement;
use App\Listeners\MakeNewClaimFile;
use App\Listeners\SendNewClaimNotification;
use App\Listeners\SendNewClaimAcknowledgement;
use App\Listeners\SendNewPaymentNotification;
use App\Listeners\SendNewAgencyAcknowledgement;
use App\Listeners\SendNewAgencyNotification;
use App\Listeners\SendNewUpdatedClaimNotification;
use App\Listeners\SendNewUpdatedClaimAcknowledgement;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
       NewQuoteEvent::class => [
           MakeNewQuoteFile::class,
           SendNewQuoteNotification::class,
           SendNewQuoteAcknowledgement::class,
       ],
       NewContactEvent::class => [
            SendNewContactNotification::class,
            SendNewContactAcknowledgement::class
       ],
       NewQuickQuoteEvent::class => [
            SendNewQQNotification::class,
            SendNewQQAcknowledgement::class
       ],
       NewClaimEvent::class => [
            SendNewClaimNotification::class,
            SendNewClaimAcknowledgement::class,
        ],
        NewPaymentEvent::class => [
            SendNewPaymentNotification::class,
        ],
        NewAgencyEvent::class => [
            SendNewAgencyNotification::class,
            SendNewAgencyAcknowledgement::class,
        ],
        NewUpdatedClaimEvent::class => [
            SendNewUpdatedClaimNotification::class,
            SendNewUpdatedClaimAcknowledgement::class
        ]
    ];

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        parent::boot();

        //
    }
}
