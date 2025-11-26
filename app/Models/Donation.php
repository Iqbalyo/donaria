<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Campaign;
use App\Models\User;


class Donation extends Model
{
    //
    protected $fillable = [
        'campaign_id',
        'user_id',
        'amount',
        'message',
        'payment_status',
        'payment_method',
        'transaction_id'
    ];

    public function campaign()
    {
        //donasi ini milik 1 campaign
        //gw punya foreign key campaign_id
        return $this->belongsTo(Campaign::class);
    }

    public function user() 
    {
        // donasi ini dilakukan oleh 1 user
        return $this->belongsTo(User::class);
    }
}
