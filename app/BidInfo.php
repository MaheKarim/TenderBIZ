<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BidInfo extends Model
{
    //
    protected $guarded = [ ];

    public function parentService(){
        return $this->belongsTo('App\Service','service_id', 'id');
    }
    public function bidder(){
        return $this->belongsTo('App\User','bidder_id');
    }

}
