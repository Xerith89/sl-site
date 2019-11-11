<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Quote extends Model
{
    public $table = "completed_quotes";
    protected $guarded = ['ClaimsDetails'];
}
