<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Category;
use App\tendersubmit;

class Service extends Model
{
    protected $guarded = [' '];

    public function Category(){
        return $this->belongsTo('App\Category','category_name_id', 'id');
    }

    public function Services(){
        return $this->hasMany('App\tendersubmit');
    }
    
}
